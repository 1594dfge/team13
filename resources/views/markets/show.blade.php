@extends('app')

@section('title', '顯示單一市場資料')

@section('contents')
    <h1>顯示單一市場的詳細資料 </h1>

    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{ $market->id }}</td>
        </tr>
        <tr>
            <td>市場</td>
            <td>{{ $market->market }}</td>
        </tr>
        <tr>
            <td>區別</td>
            <td>{{ $market->zone }}</td>
        </tr>
        <tr>
            <td>地址</td>
            <td>{{ $market->address }}</td>
        </tr>
    </table>

    <h1>{{ $market->market }}市場的所有農產品(共{{ count($market->products) }}位)</h1>
    <table border="1">
        <tr>
            <th>編號</th>
            <th>交易日期</th>
            <th>農產品種類</th>
            <th>交易市場</th>
            <th>上價</th>
            <th>中價</th>
            <th>下價</th>
            <th>平均價</th>
            <th>交易量</th>
        </tr>
        @foreach($market->products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->transaction_date }}</td>
                <td>{{ $product->product }}</td>
                <td>{{ $product->mid }}</td>
                <td>{{ $product->high_price }}</td>
                <td>{{ $product->midium_price }}</td>
                <td>{{ $product->low_price }}</td>
                <td>{{ $product->average_price }}</td>
                <td>{{ $product->trading_volume }}</td>
            </tr>
        @endforeach
    </table>
@endsection
