<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BookController;

// Trang mặc định
Route::get('/sach', [BookController::class, 'sach']);

// Lọc theo thể loại
Route::get('/sach/theloai/{id}', [BookController::class, 'theloai']);

// Chi tiết sách
Route::get('sach/chitiet/{id}','App\Http\Controllers\BookController@chitiet');
