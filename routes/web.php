<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
<<<<<<< HEAD
Route::get('/galeri', function () {
    return view('galeri');
=======
Route::get('/artikel', function () {
    return view('artikel');
>>>>>>> c09fb3408d6917e181c067279aaa9e49dbed4f77
});
