<?php

use App\Livewire\VendorProductsWizard;
use App\Livewire\VendorTransportationsWizard;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::any('/', function () {
    $products = Product::query()->paginate(5)->withQueryString();
    // dd($products);
    return view('welcome', ['products' => $products]);
});
Route::get('/language/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }
    App::setLocale($locale);
    return redirect()->back();
})->name('locale');

Route::any('/home', function () {
    return redirect('/');
})->name('home');

Route::get('/vendor-product', VendorProductsWizard::class)->name('vendor-product');
Route::get('/vendor-transportations', VendorTransportationsWizard::class)->name('vendor-transportations');

