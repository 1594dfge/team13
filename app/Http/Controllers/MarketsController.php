<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $markets=Market::all();
        return view('markets.index')->with(['markets'=>$markets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('markets.create');
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
        $market = $request->input('market');
        $zone = $request->input('zone');
        $address = $request->input('address');
        Market::create([
            'market' => $market,
            'zone' => $zone,
            'address' => $address
        ]);
        return redirect('markets'); // 觸發 /teams 路由(用 get 方法)
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
        $market=Market::findOrFail($id);
        return  view('markets.show')->with(['market'=>$market]);
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
        $market=Market::findOrFail($id);
        return  view('markets.edit')->with(['market'=>$market]);
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
        $market = Market::findOrFail($id);
        // 修改(資料來自於表單)
        $market->market = $request->input('market');
        $market->zone = $request->input('zone');
        $market->address = $request->input('address');

        // 正是儲存至 DBMS (Database Management System = MySQL)
        $market->save();

        return redirect('markets'); // 觸發 /teams 路由(用 get 方法)
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
        $market = Market::findOrFail($id);
        $market->delete();
        return redirect('markets'); // 觸發 /teams 路由(用 get 方法)
    }

    public function north()
    {
        $markets = Market::zone('北區')->get();
        return view('markets.index', ['markets'=>$markets]);
    }

    public function east()
    {
        $markets = Market::zone('東區')->get();
        return view('markets.index', ['markets'=>$markets]);
    }

    public function west()
    {
        $markets = Market::zone('中區')->get();
        return view('markets.index', ['markets'=>$markets]);
    }

    public function south()
    {
        $markets = Market::zone('南區')->get();
        return view('markets.index', ['markets'=>$markets]);
    }

    public function api_markets()
    {
        return Market::all();
    }

    public function api_update(Request $request)
    {
        $market = Market::find($request->input('id'));
        if ($market == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $market->market = $request->input('market');
        $market->zone = $request->input('zone');
        $market->address = $request->input('address');
        if ($market->save())
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
        $market = Market::find($request->input('id'));

        if ($market == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($market->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }

    }
}
