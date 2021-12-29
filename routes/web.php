<?php

use App\Http\Controllers\MarketsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    #return view('welcome');
    #return "hello HELLO";
    return redirect('products');
});

// 北區市場查詢
Route::get('north', [MarketsController::class, 'north'])->name('markets.north');
// 東區市場查詢
Route::get('east', [MarketsController::class, 'east'])->name('markets.east');
// 中區市場查詢
Route::get('west', [MarketsController::class, 'west'])->name('markets.west');
// 南區市場查詢
Route::get('south', [MarketsController::class, 'south'])->name('markets.south');

Route::get('grapes', [ProductsController::class, 'grapes'])->name('products.grapes');
Route::get('apples', [ProductsController::class, 'apples'])->name('products.apples');
Route::get('sugarapples', [ProductsController::class, 'sugarapples'])->name('products.sugarapples');
Route::get('bananas', [ProductsController::class, 'bananas'])->name('products.bananas');

Route::resource("products",ProductsController::class);
Route::resource("markets",MarketsController::class);
