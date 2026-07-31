<?php

use Illuminate\Support\Facades\Route;

// Route untuk Halaman Utama (Bite & Go / Index)
Route::get('/', function () {
    return view('home.index');
})->name('home');

// Route untuk Halaman Tentang Kami / Tim (About)
Route::get('/tentang-kami', function () {
    return view('home.about'); 
})->name('about');

// Route untuk Halaman Kontak (Opsional, arahkan ke index atau buat view baru jika ada)
Route::get('/kontak', function () {
    return view('home.index'); // Bisa disesuaikan jika nanti ada view khusus kontak
})->name('contact');

// Route untuk Halaman Kontak (Contact)
Route::get('/kontak', function () {
    return view('home.contact');
})->name('contact');