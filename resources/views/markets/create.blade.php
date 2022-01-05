@extends('app')

@section('title', '新增一筆市場資料')

@section('contents')
    <h1>顯示市場的新增表單 </h1>
    <form method="post" action="/markets">
        @csrf
        <table border="1">
            <tr>
                <td>市場</td>
                <td>
                    <select name="market" required>
                        <option value="台北二">台北二</option>
                        <option value="台北一">台北一</option>
                        <option value="板橋區">板橋區</option>
                        <option value="三重區">三重區</option>
                        <option value="宜蘭市">宜蘭市</option>
                        <option value="桃農">桃農</option>
                        <option value="台中市">台中市</option>
                        <option value="豐原區">豐原區</option>
                        <option value="東勢鎮">東勢鎮</option>
                        <option value="鳳山區">鳳山區</option>
                        <option value="台東市">台東市</option>
                        <option value="高雄市">高雄市</option>
                        <option value="嘉義市">嘉義市</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>區別</td>
                <td>
                    <select name="zone" required>
                        <option value="北區">北區</option>
                        <option value="東區">東區</option>
                        <option value="中區">中區</option>
                        <option value="南區">南區</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>地址</td>
                <td>
                    <select name="address" required>
                        <option value="台北市萬華區萬大路533號">台北市萬華區萬大路533號</option>
                        <option value="新北市板橋區板城路1000號">新北市板橋區板城路1000號</option>
                        <option value="新北市三重區中正北路111號">新北市三重區中正北路111號</option>
                        <option value="宜蘭縣宜蘭市黎明二路1號">宜蘭縣宜蘭市黎明二路1號</option>
                        <option value="桃園市蘆竹區文中路一段107號">桃園市蘆竹區文中路一段107號</option>
                        <option value="台中市西屯區中清路二段1558號">台中市西屯區中清路二段1558號</option>
                        <option value="台中市豐原區豐原大道八段369號">台中市豐原區豐原大道八段369號</option>
                        <option value="台中市東勢區第一橫街126號">台中市東勢區第一橫街126號</option>
                        <option value="高雄市鳳山區維新路124號">高雄市鳳山區維新路124號</option>
                        <option value="台東縣台東市更生北路106號">台東縣台東市更生北路106號</option>
                        <option value="高雄市鳳山區中山西路316號">高雄市鳳山區中山西路316號</option>
                        <option value="嘉義市西區北港路251號">嘉義市西區北港路251號</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
    </form>
@endsection
