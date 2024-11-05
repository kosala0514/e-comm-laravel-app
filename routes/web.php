<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/token', function () {
    return csrf_token();
});

// Create
Route::post('product/store', [ProductController::class, 'store']);
// Read
Route::get('product/all', [ProductController::class, 'all']);
//edit
Route::get('product/{id}', [ProductController::class, 'get']);
// Update
Route::post('product/{id}', [ProductController::class, 'update']);
// Delete
Route::delete('product/{id}', [ProductController::class, 'delete']); 
