<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/tes', function () {
    return view('');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
});

Route::get('/', [FrontController::class, 'index']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::get('/shop', [FrontController::class, 'shop']);
Route::get('/cart', [FrontController::class, 'cart']);
Route::get('/checkout', [FrontController::class, 'checkout']);
Route::get('/produk', [FrontController::class, 'produk']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/produkdetail', [FrontController::class, 'produkDetail']);
