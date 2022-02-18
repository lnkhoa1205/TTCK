<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SettingShopController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\ShipController;
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
    return view('welcome');
});
Route::resource('/product', ProductController::class);
Route::resource('/select', SelectController::class);
Route::resource('/option', OptionController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/ship', ShipController::class);
Route::resource('/warehouse', WarehouseController::class);
// Route::delete('myselectsDeleteAll', 'SelectController@deleteAll');
Route::delete('myselectsDeleteAll', [SelectController::class, 'deleteAll'])->name('myselectsDeleteAll');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sellercenter', [App\Http\Controllers\HomeController::class, 'sellercenter'])->name('sellercenter');
Route::get('/sellercenter/new', [App\Http\Controllers\HomeController::class, 'new_seller'])->name('sellercenter_new');

Route::get('/ajax_get/location', [App\Http\Controllers\HomeController::class, 'getLocation'])->name('getlocation');


Route::post('/newseller', [App\Http\Controllers\HomeController::class, 'storenewSeller'])->name('newseller');

//hồ sơ shop
Route::get('/myshop', [App\Http\Controllers\SettingShopController::class, 'info'])->name('myshop');
Route::post('/updateinfo/{id}', [App\Http\Controllers\SettingShopController::class, 'updateinfo'])->name('updateinfo');
//Cài đặt vận chuyển
Route::get('/ship', [App\Http\Controllers\SettingShopController::class, 'ship'])->name('ship');
Route::post('/updateship/{id}', [App\Http\Controllers\SettingShopController::class, 'updateShip'])->name('updateship');



