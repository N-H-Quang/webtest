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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => 'adminmanager','middleware'=>'checkadmin'], function () {
    Route::get('/', 'AdminController@index')->name('tc'); 
    Route::resource('product', 'AdminProductController');
    Route::get('changestatus/{id}', 'AdminProductController@changepublic')->name('changestatus');
    Route::group(['prefix' => 'logproduct'], function () {
        Route::get('/', 'AdminLogproductController@index')->name('restoreindex');
        Route::get('/{id}', 'AdminLogproductController@restore')->name('restore');
        Route::delete('/{id}','AdminLogproductController@destroy')->name('restoredestroy');
    });
    Route::resource('usercontroller', 'AdminUserController')->except('create','store','show','update','edit');
   
});

Route::group(['prefix' => 'loginadmin'], function () {
    Route::get('/', 'AdminLoginController@login')->name('login');
Route::post('/','AdminLoginController@acesslogin');
Route::get('logout', 'AdminLoginController@logout')->name('logout');

});




