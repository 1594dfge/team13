<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarketsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

#Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
#    return $request->user();
#});

Route::post('register', [AuthController::class, 'register']);

Route::post('login',  [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // 查詢所有市場
    Route::get('markets', [MarketsController::class, 'api_markets']);
    // 修改指定市場
    Route::patch('markets', [MarketsController::class, 'api_update']);
    // 刪除指定市場
    Route::delete('markets', [MarketsController::class, 'api_delete']);
    // 查詢所有農產品
    Route::get('products', [ProductsController::class, 'api_products']);
    // 修改指定農產品
    Route::patch('products', [ProductsController::class, 'api_update']);
    // 刪除指定農產品
    Route::delete('products', [ProductsController::class, 'api_delete']);
});
