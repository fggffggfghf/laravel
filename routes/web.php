<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/category', function () {
    return view('category');
})->name('category');

// Открытие формы добавления книги
Route::get('/author', function () {
    return view('author');
})->name('author');

// Сохранение книги в базу данных
Route::post('/author', [TextController::class, 'store']);

// Открытие админки со списком книг
Route::get('/admin', [TextController::class, 'index'])->name('admin');