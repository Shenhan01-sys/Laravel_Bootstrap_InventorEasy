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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', 'NavController@home');
Route::get('/master_data', 'NavController@master_data');
Route::get('/about', 'NavController@about');
Route::get('/faq', 'NavController@faq');
Route::get('/welcome', 'NavController@welcome');
