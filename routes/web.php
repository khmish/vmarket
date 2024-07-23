<?php

use App\Livewire\VendorProductsWizard;
use App\Livewire\VendorTransportationsWizard;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['setLocale']], function () {
    Route::any('/', function () {
        $products = Product::query()->paginate(5)->withQueryString();
        // dd($products);
        return view('welcome', ['products' => $products]);
    });
    Route::get('/language/{locale}', function ($locale) {
        session()->put('locale', $locale);
        return redirect()->back();
    })->name('locale');

    Route::any('/home', function () {
        return redirect('/');
    })->name('home');

    Route::get('/vendor-product', VendorProductsWizard::class)->name('vendor-product');
    Route::get('/vendor-transportations', VendorTransportationsWizard::class)->name('vendor-transportations');
});


// Route::get('/vendor-product', function () {

//     return view('vendor-product');
// })->name('vendor-product');
