<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Trang mặc định
Route::get('/sach', [BookController::class, 'index']);

// Lọc theo thể loại
Route::get('/sach/theloai/{id}', [BookController::class, 'theloai']);

