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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'admin'],function(){
    route::get('dashboard','adminController@index')->name('admin.dashboard');
});

route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'user'],function(){
    route::get('dashboard','userController@index')->name('user.dashboard');
});