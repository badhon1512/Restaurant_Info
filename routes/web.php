<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestroController;

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



Route::get('/',[RestroController::class,'start']);

Route::get('/add',[RestroController::class,'showForm']);

Route::get('/info',[RestroController::class,'restaurantInfo']);
Route::post('/add',[RestroController::class,'addRestaurant']);

Route::get('/delete/{name}',[RestroController::class,'delete']);

Route::get('/update/{name}',[RestroController::class,'update']);
Route::post('/update',[RestroController::class,'updateRestaurant']);