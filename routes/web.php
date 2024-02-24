<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BevController; 
use App\Http\Controllers\BeautyController; 
use App\Http\Controllers\CareController; 
use App\Http\Controllers\BabyController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\TransaksiController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('category') -> group(function () {
    Route::get('/food-beverage', [BevController::class, 'index']);
    Route::get('/beauty-health', [BeautyController::class, 'index']);
    Route::get('/home-care', [CareController::class, 'index']);
    Route::get('/baby-kid', [BabyController::class, 'index']);
});

Route::get('/user/{id}/name/{name}', [UserController::class,'index']);
Route::get('/transaksi', [TransaksiController::class,'index']);