<?php

use Illuminate\Support\Facades\Route;

Route::any('/', function () {
    return view('welcome');
});
Route::any('/home', function () {
    return view('home');
});

Route::get('/vendor-product', function () {

    return view('vendor-product');
})->name('vendor-product');
