<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.katalog', ['title' => 'Katalog Tanaman']);
});

Route::get('/katalog', function () {
    return view('user.katalog', ['title' => 'Katalog Tanaman']);
});

Route::get('/detail', function () {
    return view('user.detail', ['title' => 'Detail Tanaman']);
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', ['title' => 'Dashboard Admin']);
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/tanaman/tambah', function () {
    return view('admin.add-plant'); 
});

// Tampilkan halaman login
Route::get('/login', function () {
    return view('admin.login'); // Ubah sesuai folder file login kamu
})->name('login');

// Proses login
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
