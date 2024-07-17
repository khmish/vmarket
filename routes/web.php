<?php

use App\Livewire\VendorProductsWizard;
use App\Livewire\VendorTransportationsWizard;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::any('/', function () {
    return "<h1>hello</h1>";
});
Route::any('/home', function () {
    return redirect('/');
})->name('home');

Route::get('/vendor-product', VendorProductsWizard::class)->name('vendor-product');
Route::get('/vendor-transportations', VendorTransportationsWizard::class)->name('vendor-transportations');


// Route::get('/vendor-product', function () {

//     return view('vendor-product');
// })->name('vendor-product');
