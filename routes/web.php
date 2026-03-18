<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookController1;
use App\Http\Controllers\kiemtra1Controller;




Route::get('/nguyenhuynhthuylinh', function () {
    return "Nguyễn Huỳnh Thùy Linh";
});

Route::get('/nguyenhuynhsaly', function () {
    return "Nguyễn Huỳnh Sa Ly";
});