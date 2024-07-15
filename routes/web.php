<?php

use App\Livewire\VendorProductsWizard;
use App\Livewire\VendorTransportationsWizard;
use Illuminate\Support\Facades\Route;

Route::any('/', function () {
    return view('welcome');
});
Route::any('/home', function () {
    return view('home');
});

Route::get('/vendor-product', VendorProductsWizard::class)->name('vendor-product');
Route::get('/vendor-transportations', VendorTransportationsWizard::class)->name('vendor-transportations');


// Route::get('/vendor-product', function () {

//     return view('vendor-product');
// })->name('vendor-product');

