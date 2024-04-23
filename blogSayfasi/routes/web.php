<?php

use App\Http\Controllers\BLogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('index',[BLogController::class,'index']);
Route::get('home',[BLogController::class,'home']);
Route::get('create',[BLogController::class,'create']);
Route::get('about',[BLogController::class,'about']);
