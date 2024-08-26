<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);
Route::get('products/search/{name}', [ProductController::class, 'search']);

Route::get('/user', function(Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
