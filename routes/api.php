<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::controller(ProductController::class)->group(function () {
    Route::post('products/search', 'search');
    Route::delete('products/{id}', 'destroy');
    Route::put('products/{id}', 'update');
    Route::get('products/{id}', 'show');
    Route::post('products', 'store');
    Route::get('products', 'index');
});


