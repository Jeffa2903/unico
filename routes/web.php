<?php

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


Route::post('/postlogin','LoginController@postlogin')->name('postlogin');
Route::get('/postlogout','LoginController@logout')->name('postlogout');

Route::get('/', function () {
    return view('login');
});



Route::get('/home', function () {
    return view('main');
})->name('home');

Route::get('/back', function () {
    return back();
})->name('back');
Route::get('/indexuser','userController@index')->name('user.index');
Route::get('/createuser','userController@create')->name('user.create');
Route::post('/simpanuser','userController@store')->name('user.store');
Route::get('/detailuser','userController@show')->name('user.detail');
