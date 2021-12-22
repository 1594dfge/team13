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

Route::resource("products",ProductsController::class);
Route::resource("markets",MarketsController::class);
