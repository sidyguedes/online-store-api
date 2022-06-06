<?php

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\Auth\AuthApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('/auth', [AuthApiController::class, 'authenticate']);

Route::group(['prefix' => 'products'], function() {
    Route::controller(ProductController::class)->group(function () {

        Route::post('/search', 'search');
        Route::delete('/{id}', 'destroy');
        Route::put('/{id}', 'update');
        Route::get('/{id}', 'show');
        Route::post('/', 'store');
        Route::get('/', 'index');
    });
});
