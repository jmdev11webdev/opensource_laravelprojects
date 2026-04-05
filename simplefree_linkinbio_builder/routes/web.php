<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('/links', 'links.index')->name('links');
    Route::view('/page', 'page.index')->name('page');
    Route::view('/themes', 'themes.index')->name('themes');
});

require __DIR__.'/settings.php';
