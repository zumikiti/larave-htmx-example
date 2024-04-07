<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));

Route::get('/items', [ItemController::class, 'index']);

Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart', [CartController::class, 'update']);
Route::delete('/cart', [CartController::class, 'destroy']);
Route::get('/cart/sidemenu', [CartController::class, 'indexForSidemenu']);
