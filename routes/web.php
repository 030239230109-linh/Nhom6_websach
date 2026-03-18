<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookController1;
use App\Http\Controllers\kiemtra1Controller;

Route::get('/kiemtra1', [kiemtra1Controller::class, 'kiemtra1']); 
Route::post('/tinhtuoi', [kiemtra1Controller::class, 'tinhtuoi']);

Route::get('/qlsach/theloai', [BookController::class, 'laythongtintheloai']);
Route::get('/qlsach/thongtinsach', [BookController::class, 'laythongtinsach']);

Route::get('/qlsach/themtheloai', [BookController1::class, 'themtheloai']);

Route::get('/nguyenhuynhsaly', function () {
    return "Nguyễn Huỳnh Sa Ly";
});