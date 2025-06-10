<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::controller(PageController::class)->group(function () {
    
    // Home Page:
    Route::get('/', 'home')->name('home');

    // About Us Page:
    Route::get('/about-us', 'about')->name('about');

    // Products Page:
    Route::get('/products', 'productsIndex')->name('products.index');

    // Certificates Page:
    Route::get('/certificates', 'certificates')->name('certificates');

    // Contact Us Form Display:
    Route::get('/contact-us', 'contact')->name('contact.form');
});

Route::post('/contact-us', [ContactController::class, 'submitForm'])->name('contact.submit');
