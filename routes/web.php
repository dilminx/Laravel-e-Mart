<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/registerform', function () {
    return view('/register');
});

// \\\\\\\\\\\\Login and Register\\\\\\\\\\\
Route::post('/login', [UserController::class,'login']);
Route::post('/registeruser', [UserController::class,'register']);




Route::get('/product',[ProductController::class,'product']);
Route::get('/welcome',[ProductController::class,'product1']);
Route::get('/detail/{id}',[ProductController::class,'details']);
Route::get('/search',[ProductController::class,'search']);
Route::get('/notfound',[ProductController::class,'notfound']);
Route::post('/addToCart',[ProductController::class,'addCart']);

Route::get(
    '/logout',
    function () {
        Session::forget('user');
        return view('/login');
    });

Route::get('/cartlist',[ProductController::class,'cartList']);
Route::get('/removecart/{id}', [ProductController::class, 'removeItem']);
Route::get('/ordernow', [ProductController::class, 'ordernow']);
Route::post('/checkout', [ProductController::class, 'checkout']);
Route::get('/myorders', [ProductController::class, 'myOrders']);















