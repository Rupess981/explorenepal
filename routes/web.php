<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::namespace('Admin')->prefix('admin')->group(function(){
    Route::get('login', 'LoginController@index')->name('admin.login');
    Route::post('login/submit', 'LoginController@submit')->name('admin.login.submit');

    Route::middleware('auth')->group(function(){
        Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
        Route::get('logout', 'DashboardController@logout')->name('admin.dashboard.logout');
        Route::prefix('category')->group(function(){
            Route::get('/', 'CategoryController@index')->name('admin.category.index');
            Route::get('delete/{id}', 'CategoryController@delete')->name('admin.category.delete');
            Route::get('statusChange/{id}', 'CategoryController@statusChange')->name('admin.category.statusChange');
            Route::get('create', 'CategoryController@create')->name('admin.category.create');
            Route::post('store', 'CategoryController@store')->name('admin.category.store');
            Route::get('edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
            Route::post('update', 'CategoryController@update')->name('admin.category.update');

        });
        Route::prefix('faq')->group(function(){
            Route::get('/','FaqController@faq')->name('admin.faq.index');
            Route::get('delete/{id}','FaqController@delete')->name('admin.faq.delete');
            Route::get('statusChange/{id}','FaqController@statusChange')->name('admin.faq.statusChange');
            Route::get('create','FaqController@create')->name('admin.faq.create');
            Route::get('store','FaqController@store')->name('admin.faq.store');
            Route::get('edit/{id}','FaqController@edit')->name('admin.faq.edit');
            Route::get('update','FaqController@edit')->name('admin.faq.edit');
        });
        Route::prefix('product')->group(function(){
            Route::get('/{category_id}', 'ProductController@index')->name('admin.product.index');
            Route::get('delete/{id}','ProductController@delete')->name('admin.product.delete');
            Route::get('statusChange/{id}','ProductController@statusChange')->name('admin.product.statusChange');
            Route::get('create','ProductController@create')->name('admin.product.create');
            Route::post('store','ProductController@store')->name('admin.product.store');
            Route::get('edit/{id}','ProductController@edit')->name('admin.product.edit');
            Route::post('update','ProductController@edit')->name('admin.product.update');
        });
    });


});

Route::namespace('Customer')->group(function (){
   Route::get('customer','HomeController@index')->name('layouts.customer.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
