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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{slug}', 'DetailController@index')->name('detail');
//check out guest/verified

Route::post('/checkout/{id}','CheckoutController@process')
    ->name('checkout-process')->middleware(['auth','verified']);//memproses data dari checkout,, di arahkan ke checkout-process

Route::get('/checkout/{id}','CheckoutController@index')
    ->name('checkout')->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}','CheckoutController@create')
    ->name('checkout-create')//invite member lain
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}','CheckoutController@remove')
    ->name('checkout-remove')//hapus member
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}','CheckoutController@sucess')
    ->name('checkout-sucess')
    ->middleware(['auth','verified']);//menganti data status transaksi(chart)


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])//kernel/middleware// 'admin' isi dari field role
    -> group( function(){
        Route::get('/','DashboardController@index')->name('dashboard');
        Route::resource('travel-package','TravelPackageController');
        Route::resource('gallery','GalleryController');
        Route::resource('transaction','TransactionController');


    });

Auth::routes(['verify'=>true]);

