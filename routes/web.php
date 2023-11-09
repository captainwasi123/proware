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

    //Customers
    Route::prefix('customers')->group(function(){
        Route::get('/', 'CustomerController@index')->name('customers');
        Route::get('/load', 'CustomerController@load')->name('customers.load');
        Route::get('/view/{id}', 'CustomerController@view');
        Route::get('/edit/{id}', 'CustomerController@edit');
        Route::get('/delete/{id}', 'CustomerController@delete');
        Route::post('/create', 'CustomerController@create')->name('customers.create');
        Route::post('/update', 'CustomerController@customer_update')->name('customers.update');
        Route::post('/filter', 'CustomerController@customer_filter')->name('customers.filter');
    });

    //Products
    Route::prefix('products')->namespace('Products')->group(function(){

        Route::get('/', 'ProductController@index')->name('products');
        Route::get('/load', 'ProductController@load')->name('products.load');
        Route::get('/edit/{id}', 'ProductController@edit');
        Route::get('/delete/{id}', 'ProductController@delete');
        Route::post('/create', 'ProductController@create')->name('products.create');
        Route::post('/update', 'ProductController@product_update')->name('products.update');
        Route::post('/filter', 'ProductController@product_filter')->name('products.filter');

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


    //Salesmen
    Route::prefix('salesmen')->group(function(){
        Route::get('/', 'SalesmenController@index')->name('salesmen');
        Route::get('/load', 'SalesmenController@load')->name('salesmen.load');
        Route::get('/view/{id}', 'SalesmenController@view');
        Route::get('/edit/{id}', 'SalesmenController@edit');
        Route::get('/delete/{id}', 'SalesmenController@delete');
        Route::get('/statusChange/{id}/{status}', 'SalesmenController@statusChange');
        Route::post('/create', 'SalesmenController@create')->name('salesmen.create');
        Route::post('/update', 'SalesmenController@salesmen_update')->name('salesmen.update');
        Route::post('/filter', 'SalesmenController@salesmen_filter')->name('salesmen.filter');
    });


    //Profile
    Route::prefix('profile')->group(function(){
        Route::get('/', 'ProfileController@index')->name('profile');
        Route::get('/load', 'ProfileController@load')->name('profile.load');
        Route::get('/view/{id}', 'ProfileController@view');
        Route::get('/edit/{id}', 'ProfileController@edit');
        Route::get('/delete/{id}', 'ProfileController@delete');
        Route::get('/statusChange/{id}/{status}', 'ProfileController@statusChange');
        Route::post('/create', 'ProfileController@create')->name('profile.create');
        Route::post('/update', 'ProfileController@salesmen_update')->name('profile.update');
        Route::post('/filter', 'ProfileController@salesmen_filter')->name('profile.filter');
    });

});


Route::get('/inquiries', function () {
    return view('salesManager.inquiries');
});

Route::get('/orders', function () {
    return view('salesManager.orders');
});



