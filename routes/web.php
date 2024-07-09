<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

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

// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//     Route::get('/', function () {
//         return view('admin.index');
//     });
// });

Route::get('/', [FrontController::class, 'index']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::get('/shop', [FrontController::class, 'shop']);
Route::get('/cart', [FrontController::class, 'cart']);
Route::get('/checkout', [FrontController::class, 'checkout']);
Route::get('/produk', [FrontController::class, 'produk']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/produkdetail', [FrontController::class, 'produkDetail']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('user', UsersController::class);
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
});
