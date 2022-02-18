<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return view('/frontend/page/Index');
});
Route::get('/shop', function () {
    return view('/frontend/page/Shop/Shopindex');
});
Route::get('/cart', function () {
    return view('/frontend/page/Cart');
});
Route::get('/detail', function () {
    return view('/frontend/page/Detail');
});
Route::get('/infouser', function () {
    return view('/frontend/page/User/Infouser');
});
Route::get('/order', function () {
    return view('/frontend/page/User/Order');
});
Route::get('/notification', function () {
    return view('/frontend/page/User/Notification');
});
Route::get('/address', function () {
    return view('/frontend/page/User/Address');
});
Route::resource('/product', ProductController::class);


    