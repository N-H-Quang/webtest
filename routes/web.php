<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','userindexController@index')->name('home');
Route::get('login', 'userindexController@login')->name('userlogin');
Route::post('login', 'userindexController@accesslogin');
Route::get('logout', 'userindexController@logout')->name('userlogout');
Route::resource('uploadproduct', 'userProductController')->middleware('checkuser');
Route::get('signup', 'userindexController@signup')->name('signup');
Route::post('signup', 'userindexController@register');
Route::get('resetpassword','userindexController@resetpassword')->name('resetpassword');
Route::post('resetpassword', 'userindexController@sendmail');
Route::get('checkcode','userindexController@checkcode')->middleware('resetpassword')->name('reset-password');
Route::post('checkcode', 'userindexController@setforgotpassword')->middleware('resetpassword');


