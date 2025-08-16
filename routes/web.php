<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

//Authh Login
Route::get('/login', [AuthController::class, 'index_login'])->name('login');
Route::post('/masuk', [AuthController::class, 'masuk']);
Route::get('/logout', [AuthController::class, 'logout']);
//Auth Regist
Route::get('/register', [AuthController::class, 'index_register']); 
Route::post('/regist', [AuthController::class, 'regist']); 
