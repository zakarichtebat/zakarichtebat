<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index']);

// Routes pour la gestion des sessions
Route::get('/session', [SessionController::class, 'index']);
Route::post('/session', [SessionController::class, 'store']);
Route::delete('/session/{key}', [SessionController::class, 'destroy']);

// Routes pour la gestion des produits
Route::resource('products', ProductController::class);