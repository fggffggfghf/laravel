<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/author', function () {
    return view('author');
})->name('author');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');