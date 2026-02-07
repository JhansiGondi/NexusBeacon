<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/connect', function () {
    return view('connect');
})->name('connect');

Route::get('/converse', function () {
    return view('converse');
})->name('converse');

Route::get('/convert', function () {
    return view('convert');
})->name('convert');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    // Validate the request
    $request->validate([
        'email' => 'required|email'
    ]);

    // Simulate sending an email logic here...
    
    return back()->with('success', 'Thank you! Your audit request has been received. We will be in touch shortly.');
})->name('contact.submit');
