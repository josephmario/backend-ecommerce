<?php

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
// Route::get('customer', 'App\Http\Controllers\CustomerController@index');
Route::post('order', 'App\Http\Controllers\OrderController@create');
Route::get('order', 'App\Http\Controllers\OrderController@index');
Route::get('order/{order_detail_id}/', 'App\Http\Controllers\OrderController@show');
Route::put('order/{order_detail_id}', 'App\Http\Controllers\OrderController@update');
Route::get('product', 'App\Http\Controllers\ProductController@index');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
