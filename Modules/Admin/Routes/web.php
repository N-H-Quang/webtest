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

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'adminmanager','middleware'=>'checkadmin'], function () {
    Route::get('/', 'AdminController@index')->name('tc'); 
    Route::resource('product', 'AdminProductController');
    Route::get('changestatus/{id}', 'AdminProductController@changepublic')->name('changestatus');
});
Route::group(['prefix' => 'loginadmin'], function () {
    Route::get('/', 'AdminLoginController@login')->name('login');
Route::post('/','AdminLoginController@acesslogin');
Route::get('logout', 'AdminLoginController@logout')->name('logout');
});



