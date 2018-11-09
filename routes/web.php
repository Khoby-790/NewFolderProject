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

Route::get('/', function () {
    return view('welcome');
});


Route::get('addflower','FlowerController@populate');
Route::get('login',function(){
  return view('login');
})->name('login');

Route::get('register',function(){
  return view('register');
});

Route::get('results',function(){
  return view('results');
});

Route::get('dashboard',function(){
  return view('dashboard');
})->name('dashboard');
Route::post('register_company','FlowerController@register')->name('register_company');
Route::post('log_company_user','FlowerController@login')->name('log_company_user');
