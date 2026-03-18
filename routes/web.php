<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// 1. Route mặc định của Laravel
Route::get('/', function () {
    return view('welcome');
});

// 2. Route cá nhân (Bước 3 - Nhánh main)
Route::get('/lnnq', function () {
    return 'lenguyennhuquynh - Nhóm 6';
});

// 3. Route xử lý Database (Bước 7 - Nhánh riêng)
// Đảm bảo bạn đã chạy lệnh: php artisan make:controller MovieController
Route::get('/the-loai', [MovieController::class, 'getGenres']);