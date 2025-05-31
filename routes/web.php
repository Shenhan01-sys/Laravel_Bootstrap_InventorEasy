<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\itemController;

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


Route::get('/home', [NavController::class, 'home']);
Route::get('/master_data', [itemController::class, 'index_master_data']);
Route::get('/about', [NavController::class, 'about']);
Route::get('/faq', [NavController::class, 'faq']);
Route::get('/welcome', [NavController::class, 'welcome']);
Route::get('/listOfItems', [itemController::class, 'index']);
Route::get('/insertItems', [NavController::class, 'insertItems']);
Route::post('/insertItems', [itemController::class, 'insertItems'])->name('insert_Item');

Route::get('/', [NavController::class, 'login']);
Route::post('/', [NavController::class, 'login'])->name('login');