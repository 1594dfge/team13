<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->date('transaction_date')->comment('交易日期');
            $table->string('product',191)->comment('農產品種類');
            $table->tinyInteger('mid')->unsigned()->comment('交易市場');
            $table->double('high_price')->unsigned()->comment('上價');
            $table->double('midium_price')->unsigned()->comment('中價');
            $table->double('low_price')->unsigned()->comment('下價');
            $table->double('average_price')->unsigned()->comment('平均價');
            $table->integer('trading_volume')->unsigned()->comment('交易價');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
