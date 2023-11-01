<?php

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

Route::get('/', function () {
    return view('salesManager.dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/inquiries', function () {
    return view('salesManager.inquiries');
});

Route::get('/orders', function () {
    return view('salesManager.orders');
});

Route::get('/customers', function () {
    return view('salesManager.customers');
});

Route::get('/products', function () {
    return view('salesManager.products.products');
});

Route::get('/products/categories', function () {
    return view('salesManager.products.categories');
});

Route::get('/products/brands', function () {
    return view('salesManager.products.brands');
});

Route::get('/salesmen', function () {
    return view('salesManager.salesmen');
});


