<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::all()->sortBy('mid',SORT_REGULAR,false);
        return view('products.index')->with(['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $markets=Market::all();
        $allproducts=Product::Allproducts()->get();
        return view('products.create')->with(['markets'=>$markets,'allproducts'=>$allproducts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $transaction_date = $request->input('transaction_date');
        $product = $request->input('product');
        $mid = $request->input('mid');
        $high_price = $request->input('high_price');
        $midium_price = $request->input('midium_price');
        $low_price = $request->input('low_price');
        $average_price = $request->input('average_price');
        $trading_volume = $request->input('trading_volume');

        Product::create(
            [
                'transaction_date' => $transaction_date,
                'product' => $product,
                'mid' => $mid,
                'high_price' => $high_price,
                'midium_price' => $midium_price,
                'low_price' => $low_price,
                'average_price' => $average_price,
                'trading_volume' => $trading_volume
            ]
        );
        return redirect('products'); // 觸發 /teams 路由(用 get 方法)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product=Product::findOrFail($id);
        return  view('products.show')->with(['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product=Product::findOrFail($id);
        $markets=Market::all();
        $allproducts=Product::Allproducts()->get();
        return  view('products.edit')->with(['product'=>$product,'markets'=>$markets,'allproducts'=>$allproducts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // 先調出 $id 的 Player Model物件
        $product = Product::findOrFail($id);
        // 修改(資料來自於表單)
        $product->transaction_date = $request->input('transaction_date');
        $product->product = $request->input('product');
        $product->mid = $request->input('mid');
        $product->high_price = $request->input('high_price');
        $product->midium_price = $request->input('midium_price');
        $product->low_price = $request->input('low_price');
        $product->average_price = $request->input('average_price');
        $product->trading_volume = $request->input('trading_volume');

        // 正是儲存至 DBMS (Database Management System = MySQL)
        $product->save();

        return redirect('products'); // 觸發 /teams 路由(用 get 方法)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('products'); // 觸發 /teams 路由(用 get 方法)
    }

    public function grapes()
    {
        $products = Product::product('巨峰葡萄')->get();
        return view('products.index', ['products'=>$products]);
    }

    public function apples()
    {
        $products = Product::product('蘋果-惠')->get();
        return view('products.index', ['products'=>$products]);
    }

    public function sugarapples()
    {
        $products = Product::product('釋迦')->get();
        return view('products.index', ['products'=>$products]);
    }

    public function bananas()
    {
        $products = Product::product('香蕉')->get();
        return view('products.index', ['products'=>$products]);
    }

    public function api_products()
    {
        return Product::all();
    }


    public function api_update(Request $request)
    {
        $product = Product::find($request->input('id'));
        if ($product == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        $product->transaction_date = $request->input('transaction_date');
        $product->product = $request->input('product');
        $product->mid = $request->input('mid');
        $product->high_price = $request->input('high_price');
        $product->midium_price = $request->input('midium_price');
        $product->low_price = $request->input('low_price');
        $product->average_price = $request->input('average_price');
        $product->trading_volume = $request->input('trading_volume');

        if ($product->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $product = Product::find($request->input('id'));

        if ($product == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($product->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
