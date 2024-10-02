<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/global-network', function () {
    return view('global-network');
})->name('global-network');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
