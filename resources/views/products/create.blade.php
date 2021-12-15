<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示農產品的新增表單</title>
</head>
<body>
<h1>顯示農產品的新增表單 </h1>
<form method="post" action="/products">
    @csrf
    <table border="1">
        <tr>
            <td>交易日期</td>
            <td><input type="text" name="transaction_date"/></td>
        </tr>
        <tr>
            <td>農產品種類</td>
            <td><input type="text" name="product"/></td>
        </tr>
        <tr>
            <td>交易市場</td>
            <td><input type="text" name="mid"/></td>
        </tr>
        <tr>
            <td>上價</td>
            <td><input type="text" name="high_price"/></td>
        </tr>
        <tr>
            <td>中價</td>
            <td><input type="text" name="midium_price"/></td>
        </tr>
        <tr>
            <td>下價</td>
            <td><input type="text" name="low_price"/></td>
        </tr>
        <tr>
            <td>平均價</td>
            <td><input type="text" name="average_price"/></td>
        </tr>
        <tr>
            <td>交易量</td>
            <td><input type="text" name="trading_volume"/></td>
        </tr>
    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>

</body>
</html>
