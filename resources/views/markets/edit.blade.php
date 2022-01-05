@extends('app')

@section('title', '編輯單一市場資料')

@section('contents')
    <h1>顯示單一市場的編輯表單 </h1>
    <h2>
        <a href="{{route('markets.index')}}">
            所有市場資料
        </a>
    </h2>
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
                <td>
                    <select name="market" required>
                        @if($market->market=="台北二")
                            <option value="台北二" selected>台北二</option>
                        @else
                            <option value="台北二">台北二</option>
                        @endif
                        @if($market->market=="台北一")
                            <option value="台北一" selected>台北一</option>
                        @else
                            <option value="台北一">台北一</option>
                        @endif
                        @if($market->market=="板橋區")
                            <option value="板橋區" selected>板橋區</option>
                        @else
                            <option value="板橋區">板橋區</option>
                        @endif
                        @if($market->market=="三重區")
                            <option value="三重區" selected>三重區</option>
                        @else
                            <option value="三重區">三重區</option>
                        @endif
                        @if($market->market=="宜蘭市")
                            <option value="宜蘭市" selected>宜蘭市</option>
                        @else
                            <option value="宜蘭市">宜蘭市</option>
                        @endif
                        @if($market->market=="桃農")
                            <option value="桃農" selected>桃農</option>
                        @else
                            <option value="桃農">桃農</option>
                        @endif
                        @if($market->market=="台中市")
                            <option value="台中市" selected>台中市</option>
                        @else
                            <option value="台中市">台中市</option>
                        @endif
                        @if($market->market=="豐原區")
                            <option value="豐原區" selected>豐原區</option>
                        @else
                            <option value="豐原區">豐原區</option>
                        @endif
                        @if($market->market=="東勢鎮")
                            <option value="東勢鎮" selected>東勢鎮</option>
                        @else
                            <option value="東勢鎮">東勢鎮</option>
                        @endif
                        @if($market->market=="鳳山區")
                            <option value="鳳山區" selected>鳳山區</option>
                        @else
                            <option value="鳳山區">鳳山區</option>
                        @endif
                        @if($market->market=="台東市")
                            <option value="台東市" selected>台東市</option>
                        @else
                            <option value="台東市">台東市</option>
                        @endif
                        @if($market->market=="高雄市")
                            <option value="高雄市" selected>高雄市</option>
                        @else
                            <option value="高雄市">高雄市</option>
                        @endif
                        @if($market->market=="嘉義市")
                            <option value="嘉義市" selected>嘉義市</option>
                        @else
                            <option value="嘉義市">嘉義市</option>
                        @endif
                    </select>
                </td>
            </tr>
            <tr>
                <td>區別</td>
                <td>
                    <select name="zone" required>
                        @if($market->zone=="北區")
                            <option value="北區" selected>北區</option>
                        @else
                            <option value="北區">北區</option>
                        @endif
                        @if($market->zone=="東區")
                            <option value="東區" selected>東區</option>
                        @else
                            <option value="東區">東區</option>
                        @endif
                        @if($market->zone=="中區")
                            <option value="中區" selected>中區</option>
                        @else
                            <option value="中區">中區</option>
                        @endif
                        @if($market->zone=="南區")
                            <option value="南區" selected>南區</option>
                        @else
                            <option value="南區">南區</option>
                        @endif
                    </select>
                </td>
            </tr>
            <tr>
                <td>地址</td>
                <td>
                    <select name="address" required>
                        @if($market->address=="台北市萬華區萬大路533號")
                            <option value="台北市萬華區萬大路533號" selected>台北市萬華區萬大路533號</option>
                        @else
                            <option value="台北市萬華區萬大路533號">台北市萬華區萬大路533號</option>
                        @endif
                        @if($market->address=="新北市板橋區板城路1000號")
                            <option value="新北市板橋區板城路1000號" selected>新北市板橋區板城路1000號</option>
                        @else
                            <option value="新北市板橋區板城路1000號">新北市板橋區板城路1000號</option>
                        @endif
                        @if($market->address=="新北市三重區中正北路111號")
                            <option value="新北市三重區中正北路111號" selected>新北市三重區中正北路111號</option>
                        @else
                            <option value="新北市三重區中正北路111號">新北市三重區中正北路111號</option>
                        @endif
                        @if($market->address=="宜蘭縣宜蘭市黎明二路1號")
                            <option value="宜蘭縣宜蘭市黎明二路1號" selected>宜蘭縣宜蘭市黎明二路1號</option>
                        @else
                            <option value="宜蘭縣宜蘭市黎明二路1號">宜蘭縣宜蘭市黎明二路1號</option>
                        @endif
                        @if($market->address=="桃園市蘆竹區文中路一段107號")
                            <option value="桃園市蘆竹區文中路一段107號" selected>桃園市蘆竹區文中路一段107號</option>
                        @else
                            <option value="桃園市蘆竹區文中路一段107號">桃園市蘆竹區文中路一段107號</option>
                        @endif
                        @if($market->address=="台中市西屯區中清路二段1558號")
                            <option value="台中市西屯區中清路二段1558號" selected>台中市西屯區中清路二段1558號</option>
                        @else
                            <option value="台中市西屯區中清路二段1558號">台中市西屯區中清路二段1558號</option>
                        @endif
                        @if($market->address=="台中市豐原區豐原大道八段369號")
                            <option value="台中市豐原區豐原大道八段369號" selected>台中市豐原區豐原大道八段369號</option>
                        @else
                            <option value="台中市豐原區豐原大道八段369號">台中市豐原區豐原大道八段369號</option>
                        @endif
                        @if($market->address=="台中市東勢區第一橫街126號")
                            <option value="台中市東勢區第一橫街126號" selected>台中市東勢區第一橫街126號</option>
                        @else
                            <option value="台中市東勢區第一橫街126號">台中市東勢區第一橫街126號</option>
                        @endif
                        @if($market->address=="高雄市鳳山區維新路124號")
                            <option value="高雄市鳳山區維新路124號" selected>高雄市鳳山區維新路124號</option>
                        @else
                            <option value="高雄市鳳山區維新路124號">高雄市鳳山區維新路124號</option>
                        @endif
                        @if($market->address=="台東縣台東市更生北路106號")
                            <option value="台東縣台東市更生北路106號" selected>台東縣台東市更生北路106號</option>
                        @else
                            <option value="台東縣台東市更生北路106號">台東縣台東市更生北路106號</option>
                        @endif
                        @if($market->address=="高雄市鳳山區中山西路316號")
                            <option value="高雄市鳳山區中山西路316號" selected>高雄市鳳山區中山西路316號</option>
                        @else
                            <option value="高雄市鳳山區中山西路316號">高雄市鳳山區中山西路316號</option>
                        @endif
                        @if($market->address=="嘉義市西區北港路251號")
                            <option value="嘉義市西區北港路251號" selected>嘉義市西區北港路251號</option>
                        @else
                            <option value="嘉義市西區北港路251號">嘉義市西區北港路251號</option>
                        @endif
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
    </form>
@endsection
