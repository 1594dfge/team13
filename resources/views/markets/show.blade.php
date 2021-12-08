<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一市場的詳細資料</title>
</head>
<body>
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
</body>
</html>
