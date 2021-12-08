<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一市場的編輯表單</title>
</head>
<body>
<h1>顯示單一市場的編輯表單 </h1>
<form method="post" action="/markets/{{$market->id}}">
    @csrf
    @method('put')
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{ $market->id }}</td>
        </tr>
        <tr>
            <td>市場</td>
            <td><input type="text" name="market" value="{{ $market->market }}"/></td>
        </tr>
        <tr>
            <td>區別</td>
            <td><input type="text" name="zone" value="{{ $market->zone }}"/></td>
        </tr>
        <tr>
            <td>地址</td>
            <td><input type="text" name="address" value="{{ $market->address }}"/></td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>

</body>
</html>
