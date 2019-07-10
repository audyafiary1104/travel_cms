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

Route::prefix('hoteliers')->group(function() {
    Route::get('/transaksi', 'HoteliersController@index')->name('sales.transaksi');
    Route::get('/my_hotels', 'HoteliersController@myHotels')->name('sales.myhotels');
    Route::get('/room_type', 'HoteliersController@room_type')->name('sales.room');
});
