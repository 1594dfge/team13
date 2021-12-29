<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有市場資料</title>
</head>
<body>
<h1>顯示所有市場資料 </h1>
<h2>
    <a href="{{route('products.index')}}">
        所有農產品資料
    </a>
    <br>
    <a href="{{ route('markets.index') }}">所有市場</a>
    <a href="{{ route('markets.north') }}">北區市場</a>
    <a href="{{ route('markets.east') }}">東區市場</a>
    <a href="{{ route('markets.west') }}">中區市場</a>
    <a href="{{ route('markets.south') }}">南區市場</a>
</h2>
<table border="1">
    <tr>
        <th>編號</th>
        <th>市場</th>
        <th>區別</th>
        <th>地址</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
        <th>操作4</th>
    </tr>
    @foreach($markets as $market)
        <tr>
                <td>{{ $market->id }}</td>
            <td>{{ $market->market }}</td>
            <td>{{ $market->zone }}</td>
            <td>{{ $market->address }}</td>
            <td>
                <a href="markets/{{ $market->id }}">
                    詳細
                </a>
            </td>
            <td>
                <a href="markets/{{ $market->id }}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="markets/{{ $market->id }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="刪除"/>
                </form>
            </td>
            <td>
                <a href="markets/create">
                    新增
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
