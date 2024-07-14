<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/vendor-product', function () {
    return view('vendor-product');
})->name('vendor-product');
