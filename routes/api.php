<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// API Auth
    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::post('/auth/login', [AuthController::class, 'login']);
    Route::post('/auth/logout', [AuthController::class, 'logout']);

// API routes
    Route::get('/product', [ProductController::class, 'index']);
    Route::post('/product', [ProductController::class, 'create']);
    Route::get('/product/{id}', [ProductController::class, 'show']);
    Route::put('/product', [ProductController::class, 'update']);
    Route::delete('/product/{id}', [ProductController::class, 'delete']);

// Prefix all category routes with '/api'
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/category', [CategoryController::class, 'store']);
    Route::get('/category/{id}', [CategoryController::class, 'show']);
    Route::put('/category', [CategoryController::class, 'update']);
    Route::delete('/category/{id}', [CategoryController::class, 'delete']);

// Get product by Category
    Route::get('/product/productByCategory/{category_id}', [ProductController::class, 'getProductsByCategory']);
    

