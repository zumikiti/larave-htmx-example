<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/', fn () => view('home'));
Route::get('/cart', [CartController::class, 'index']);
