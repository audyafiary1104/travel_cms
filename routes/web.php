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
Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
{
    Route::get('/', function () {
    return view('welcome');
})->name('index_admin');
    Route::get('login','AdminController@login')->name('login_admin');
    Route::get('logout','AdminController@logout')->name('logout_admin');
});
Route::get('admin/login','AdminController@login')->name('login_admin');
Route::post('login/post','AdminController@post_login')->name('post_admin');
Route::get('/home', function () {
    return view('home');
});