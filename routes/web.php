<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', function () {
    return view('page');
});
Route::get('/home', [HomeController::class, 'index']);
#Route::get('/home',[HomeController::class,'index'] );
