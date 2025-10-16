<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/artikel', function () {
    return view('artikel');
});
