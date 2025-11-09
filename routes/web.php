<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // home.blade.php
})->name('home');

Route::get('/about', function () {
    return view('about'); // nanti buat about.blade.php
})->name('about');

Route::get('/skills', function () {
    return view('skills'); // buat skills.blade.php
})->name('skills');

Route::get('/contact', function () {
    return view('contact'); // buat contact.blade.php
})->name('contact');