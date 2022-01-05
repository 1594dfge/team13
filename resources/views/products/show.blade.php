@extends('app')

@section('title', '顯示單一農產品資料')

@section('contents')
    <h1>顯示單一農產品的詳細資料 </h1>
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <td>交易日期</td>
            <td>{{ $product->transaction_date }}</td>
        </tr>
        <tr>
            <td>農產品種類</td>
            <td>{{ $product->product }}</td>
        </tr>
        <tr>
            <td>交易市場</td>
            <td>{{ $product->mid }}</td>
        </tr>
        <tr>
            <td>上價</td>
            <td>{{ $product->high_price }}</td>
        </tr>
        <tr>
            <td>中價</td>
            <td>{{ $product->midium_price }}</td>
        </tr>
        <tr>
            <td>下價</td>
            <td>{{ $product->low_price }}</td>
        </tr>
        <tr>
            <td>平均價</td>
            <td>{{ $product->average_price }}</td>
        </tr>
        <tr>
            <td>交易量</td>
            <td>{{ $product->trading_volume }}</td>
        </tr>
    </table>
@endsection

