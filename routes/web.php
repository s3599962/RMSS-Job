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
Route::get('/', function (){
    return view('index');
})->name('index');

Route::get('/home', function (){
    return view('index');
})->name('index');


Route::get('recaptchacreate', 'RecaptchaController@create');
Route::post('store', 'RecaptchaController@store');

//Route::get('/', function () {
  //  return view('index');
//});

//Authentication Routes
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
