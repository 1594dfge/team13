@extends('app')

@section('title', '顯示所有農產品資料')

@section('contents')
    <h1>顯示所有農產品資料 </h1>
    <h2>
        <a href="{{ route('products.grapes') }}">巨峰葡萄</a>
        <a href="{{ route('products.apples') }}">蘋果-惠</a>
        <a href="{{ route('products.sugarapples') }}">釋迦</a>
        <a href="{{ route('products.bananas') }}">香蕉</a>
    </h2>
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
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
            <th>操作4</th>
        </tr>
        @foreach($products as $product)
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
                <td>
                    <a href="products/{{ $product->id }}">
                        詳細
                    </a>
                </td>
                <td>
                    <a href="products/{{ $product->id }}/edit">
                        修改
                    </a>
                </td>
                <td>
                    <form method="post" action="products/{{ $product->id }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除"/>
                    </form>
                </td>
                <td>
                    <a href="products/create">
                        新增
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

