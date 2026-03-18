<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookController1;
use App\Http\Controllers\kiemtra1Controller;




Route::get('/nguyenhuynhthuylinh', function () {
    return "Nguyễn Huỳnh Thùy Linh";
});

<<<<<<< HEAD
Route::get('/truonghomailinh', function () {
    return "Trương Hồ Mai Linh";
});
Route::get('/nguyenthithuylinh', function () {
    dd("Nguyen Thi Thuy Linh");
});

Route::get('/lethihonglinh', function () {
    dd("Le Thi Hong Linh");
=======
Route::get('/nguyenhuynhsaly', function () {
    return "Nguyễn Huỳnh Sa Ly";
>>>>>>> aaeaad621c931d6c56aaf07cc013ffbcb7d7870f
});