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

//Authentication

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@authenticate')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');


//Authenticated
Route::middleware('userAuth')->group(function(){
    Route::get('/', 'MainController@index')->name('dashboard');

    //Products
    Route::prefix('products')->namespace('Products')->group(function(){

        Route::get('/', 'ProductController@index')->name('products');

        //Categories
        Route::prefix('categories')->group(function(){
            Route::get('/', 'CategoryController@index')->name('products.categories');
            Route::get('/load', 'CategoryController@load')->name('products.categories.load');
            Route::post('/create', 'CategoryController@create')->name('products.categories.create');

            Route::get('/edit/{id}', 'CategoryController@edit')->name('products.categories.edit');  

            Route::get('/delete/{id}', 'CategoryController@delete')->name('products.categories.delete');
        });


        //Brands
        Route::prefix('brands')->group(function(){
            Route::get('/', 'BrandController@index')->name('products.brands');
            Route::get('/load', 'BrandController@load')->name('products.brands.load');
            Route::post('/create', 'BrandController@create')->name('products.brands.create');

            Route::get('/edit/{id}', 'BrandController@edit')->name('products.brands.edit');  

            Route::get('/delete/{id}', 'BrandController@delete')->name('products.brands.delete');
        });
    });
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


Route::get('/salesmen', function () {
    return view('salesManager.salesmen');
});


