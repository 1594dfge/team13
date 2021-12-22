<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示農產品的新增表單</title>
</head>
<body>
<h1>顯示農產品的新增表單 </h1>
<h2>
    <a href="{{route('products.index')}}">
        所有農產品資料
    </a>
</h2>
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
                    <option value="香蕉">香蕉</option>
                    <option value="蘋果-惠">蘋果-惠</option>
                    <option value="釋迦">釋迦</option>
                    <option value="巨峰葡萄">巨峰葡萄</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>交易市場</td>
            <td><input type="text" name="mid"/></td>
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

</body>
</html>
