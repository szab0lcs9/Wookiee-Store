<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use GuzzleHttp\Promise\Create;

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

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['guest'])->group(function() {
    
    Route::get('/register', [Controllers\Auth\RegisterController::class, 'create'])->name('auth.register');
    Route::post('/register', [Controllers\Auth\RegisterController::class, 'store']);
    
    Route::get('/login', [Controllers\Auth\LoginController::class, 'create'])->name('auth.login');
    Route::post('/login', [Controllers\Auth\LoginController::class, 'store']);
    
});

Route::get('/products', [Controllers\ProductController::class, 'showAll'])->name('product.total');

Route::middleware(['auth'])->group(function() {
    
    Route::get('/new-product', [Controllers\ProductController::class, 'create'])->name('product.create');
    Route::post('/new-product', [Controllers\ProductController::class, 'store']);
    
    Route::get('/product/{product}', [Controllers\ProductController::class, 'show'])->name('product.show');
    
    Route::post('/logout', [Controllers\Auth\LoginController::class, 'destroy'])->name('auth.logout');

});