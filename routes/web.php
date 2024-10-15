<?php

use App\Http\Controllers\siswaController;
use App\Http\Controllers\smkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/products/index');
});

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/siswa', function () {
//     return view('siswa');
// });

// Membuat rute baru dengan path smk, dan kita arahkan ke dalam controller smkController
// Route::resource di Laravel adalah metode untuk mendefinisikan rute - rute yg terkait dengan operasi CRUD (Create, Read, Update, Delete) pada resource tertentu
// Metode ini secara otomatis menghasilkan rute - rute yg diperlukan untuk mengelola resource tersebut, seperti : index, create, store, show, edit, update, dan destroy

Route::resource('/smk', smkController::class);
Route::resource('/siswa', siswaController::class);
Route::resource('/products', \App\Http\Controllers\ProductController::class);
