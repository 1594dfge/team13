@extends('app')

@section('title', '新增一筆農產品資料')

@section('contents')
    <h1>新增農產品</h1>
    <form method="post" action="/products">
        @csrf
        <table border="1">
            <tr>
                <td>交易日期</td>
                <td><input type="date" name="transaction_date" required/></td>
            </tr>
            <tr>
                <td>農產品種類</td>
                <td>
                    <select name="product" required>
                        @foreach($allproducts as $allproduct)
                            <option value="{{$allproduct->Product}}">{{$allproduct->Product}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>

                <td>交易市場</td>
                <td>
                    <select name="mid" required>
                        @foreach($markets as $market)
                            <option value="{{$market->id}}">{{$market->address}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>上價</td>
                <td><input type="number" step="0.01" name="high_price" required/></td>
            </tr>
            <tr>
                <td>中價</td>
                <td><input type="number" step="0.01" name="midium_price" required/></td>
            </tr>
            <tr>
                <td>下價</td>
                <td><input type="number" step="0.01" name="low_price" required/></td>
            </tr>
            <tr>
                <td>平均價</td>
                <td><input type="number" step="0.01" name="average_price" required/></td>
            </tr>
            <tr>
                <td>交易量</td>
                <td><input type="number" name="trading_volume" required/></td>
            </tr>
        </table>
        <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
    </form>
@endsection

