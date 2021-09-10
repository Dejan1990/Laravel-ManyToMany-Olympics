<?php

use App\Http\Controllers\SportController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [SportController::class, 'create']);
Route::post('/sports', [SportController::class, 'store'])->name('store');
Route::get('/sports', [SportController::class, 'show'])->name('show');
