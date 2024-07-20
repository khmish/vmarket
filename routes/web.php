<?php

use App\Livewire\VendorProductsWizard;
use App\Livewire\VendorTransportationsWizard;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::any('/', function () {
    $products = Product::query()->paginate(5)->withQueryString();
    // dd($products);
    return view('welcome', ['products' => $products]);
});
Route::get('/language/{locale}', function ($locale) {

    dd('language');
    if (array_key_exists($locale, ['en', 'ar'])) {
        session()->put('locale', $locale);
    }

    return redirect()->back();
})->name('locale')->middleware('SetLocaleM');

Route::any('/home', function () {
    return redirect('/');
})->name('home');

Route::get('/vendor-product', VendorProductsWizard::class)->name('vendor-product');
Route::get('/vendor-transportations', VendorTransportationsWizard::class)->name('vendor-transportations');


// Route::get('/vendor-product', function () {

//     return view('vendor-product');
// })->name('vendor-product');
