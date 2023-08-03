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
    return view('home');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('product', [ProductController::class,"index"]);

Route::get('product/create', [ProductController::class,"create"]);

Route::post('product/create', [ProductController::class,"store"]);

Route::get('product/create', [ProductController::class,"create"]);

Route::get('/product/{id}/edit',[ProductController::class,'edit']);

Route::put('/product/{id}/edit',[ProductController::class,'update']);

Route::delete('/product/{id}',[ProductController::class,'destroy']);


