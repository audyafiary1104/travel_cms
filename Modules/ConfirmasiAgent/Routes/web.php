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

Route::prefix('confirmasiagent')->group(function() {
    Route::get('/agent', 'ConfirmasiAgentController@index')->name('master_transaksi.agent');
    Route::get('/payment', 'ConfirmasiAgentController@payment')->name('master_transaksi.payment');
    Route::get('/hotelier', 'ConfirmasiAgentController@hotelier')->name('master_transaksi.hotelier');

});
