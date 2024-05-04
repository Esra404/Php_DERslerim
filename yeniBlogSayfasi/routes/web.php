<?php

use App\Http\Controllers\blogControlerr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function (){
    return view('home');
});
Route::get("contact",[blogControlerr::class,'contact']);
Route::get("about",[blogControlerr::class,'about']);
//Route::get('create',function (){
//    return view('admin.users.create');
//});



Route::prefix('admin')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('create', [blogControlerr::class, 'create']);
        Route::get('show', [blogControlerr::class, 'show']);
        Route::get('index',[blogControlerr::class,'index']);
    });
});

