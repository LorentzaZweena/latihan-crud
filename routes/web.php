<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/products/index');
});

Route::get('/test', function () {
    return view('test');
});

Route::resource('/products', \App\Http\Controllers\ProductController::class);
