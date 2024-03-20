<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));
Route::get('/cart', [CartController::class, 'index']);
