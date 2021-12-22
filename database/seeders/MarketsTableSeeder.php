<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketsTableSeeder extends Seeder
{
    public function generateRandomMarket() {
        $markets = ['台北二', '台北一', '板橋區', '三重區','宜蘭市','桃農','台中市','豐原區','東勢鎮','鳳山區','台東市','高雄市','嘉義市'];
        return $markets[rand(0, count($markets)-1)];
    }

    public function generateRandomZone() {
        $zones = ['北區', '東區', '中區', '南區'];
        return $zones[rand(0, count($zones)-1)];
    }

    public function generateRandomAddress() {
        $addresses = ['台北市萬華區萬大路533號', '台北市萬華區萬大路533號', '新北市板橋區板城路1000號', '新北市三重區中正北路111號'
                      ,'宜蘭縣宜蘭市黎明二路1號','桃園市蘆竹區文中路一段107號','台中市西屯區中清路二段1558號','台中市豐原區豐原大道八段369號'
                      ,'台中市東勢區第一橫街126號','高雄市鳳山區維新路124號','台東縣台東市更生北路106號','高雄市鳳山區中山西路316號'
                      ,'嘉義市西區北港路251號'];
        return $addresses[rand(0, count($addresses)-1)];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<13; $i++)
        {
            DB::table('markets')->insert([
                'market'=>$this->generateRandomMarket(),
                'zone'=>$this->generateRandomZone(),
                'address'=>$this->generateRandomAddress()
            ]);
        }
    }
}
