<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一農產品的編輯表單</title>
</head>
<body>
<h1>顯示單一農產品的編輯表單 </h1>
<h2>
    <a href="{{route('products.index')}}">
        所有農產品資料
    </a>
</h2>
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
                    @if($product->product=="香蕉")
                        <option value="香蕉" selected>香蕉</option>
                    @else
                        <option value="香蕉">香蕉</option>
                    @endif
                    @if($product->product=="蘋果-惠")
                        <option value="蘋果-惠" selected>蘋果-惠</option>
                    @else
                        <option value="蘋果-惠">蘋果-惠</option>
                    @endif
                    @if($product->product=="釋迦")
                        <option value="釋迦" selected>釋迦</option>
                    @else
                        <option value="釋迦">釋迦</option>
                    @endif
                    @if($product->product=="巨峰葡萄")
                        <option value="巨峰葡萄" selected>巨峰葡萄</option>
                    @else
                        <option value="巨峰葡萄">巨峰葡萄</option>
                    @endif
                </select>
            </td>
        </tr>
        <tr>
            <td>交易市場</td>
            <td><input type="text" name="mid" value="{{ $product->mid }}"/></td>
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

</body>
</html>
