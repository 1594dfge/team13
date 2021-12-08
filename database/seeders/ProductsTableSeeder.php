<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function generateRandomProduct() {
        $products = ['香蕉', '蘋果-惠', '釋迦', '巨峰葡萄'];
        return $products[rand(0, count($products)-1)];
    }

    function randomFloat($min = 0, $max = 1) {
        return number_format($min + mt_rand() / mt_getrandmax() * ($max - $min),1);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=$this->generateRandomProduct();
        $high_price=(float)rand(701,1000)+(float)$this->randomFloat();
        $midium_price=(float)rand(301,700)+(float)$this->randomFloat();
        $low_price=(float)rand(1,301)+(float)$this->randomFloat();
        $average_price=(float)number_format(($high_price+$midium_price+$low_price)/3.0,1);
        DB::table('products')->insert([
            'transaction_date'=>Carbon::now()->subRealDay(rand(0,31)),
            'product'=>$product,
            'mid'=>rand(1, 13),
            'high_price'=>$high_price,
            'midium_price'=>$midium_price,
            'low_price'=>$low_price,
            'average_price'=>$average_price,
            'trading_volume'=>rand(1,10000),
        ]);
    }
}
