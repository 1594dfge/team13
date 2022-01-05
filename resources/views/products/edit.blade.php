@extends('app')

@section('title', '編輯單一農產品資料')

@section('contents')
    <h1>顯示單一農產品的編輯表單 </h1>
    <form method="post" action="/products/{{$product->id}}">
        @csrf
        @method('put')
        <table border="1">
            <tr>
                <td>編號</td>
                <td>{{ $product->id }}</td>
            </tr>
            <tr>
                <td>交易日期</td>
                <td><input type="date" name="transaction_date" value="{{ $product->transaction_date }}" required/></td>
            </tr>
            <tr>
                <td>農產品種類</td>
                <td>
                    <select name="product" required>
                        @foreach($allproducts as $allproduct)
                            @if($product->product==$allproduct->Product)
                                <option value="{{$allproduct->Product}}" selected>{{$allproduct->Product}}</option>
                            @else
                                <option value="{{$allproduct->Product}}">{{$allproduct->Product}}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>交易市場</td>
                <td>
                    <select name="mid" required>
                        {{$i=1}}
                        @foreach($markets as $market)
                            @if($product->mid==$i)
                                <option value="{{$i}}" selected>{{$markets[$i-1]->address}}</option>
                            @else
                                <option value="{{$i}}">{{$markets[$i-1]->address}}</option>
                            @endif
                            {{$i++}}
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>上價</td>
                <td><input type="number" step="0.01" name="high_price" value="{{ $product->high_price }}" required/></td>
            </tr>
            <tr>
                <td>中價</td>
                <td><input type="number" step="0.01" name="midium_price" value="{{ $product->midium_price }}" required/></td>
            </tr>
            <tr>
                <td>下價</td>
                <td><input type="number" step="0.01" name="low_price" value="{{ $product->low_price }}" required/></td>
            </tr>
            <tr>
                <td>平均價</td>
                <td><input type="number" step="0.01" name="average_price" value="{{ $product->average_price }}" required/></td>
            </tr>
            <tr>
                <td>交易量</td>
                <td><input type="number" name="trading_volume" value="{{ $product->trading_volume }}" required/></td>
            </tr>
        </table>
        <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
    </form>
@endsection

