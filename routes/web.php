<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookController1;
use App\Http\Controllers\kiemtra1Controller;

Route::get('/nguyenhuynhthuylinh', function () {
    return "Nguyễn Huỳnh Thùy Linh";
});


Route::get('/truonghomailinh', function () {
    return "Trương Hồ Mai Linh";
});
Route::get('/nguyenthithuylinh', function () {
    dd("Nguyen Thi Thuy Linh");
});

<<<<<<< HEAD
=======

Route::get('/kiemtra1','App\Http\Controllers\kiemtra1Controller@kiemtra1'); 
Route::post('/tinhtuoi','App\Http\Controllers\kiemtra1Controller@tinhtuoi');

Route::get("/qlsach/heloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");

Route::get("/qlsach/themtheloai","App\Http\Controllers\BookController1@themtheloai");

Route::get("/lehoangan", function() {return 'Lê Hoàng An';});

Route::get('/tenban', function () {
    return 'Le Nguyen Nhu Quynh - Nhóm 6';
});

Route::get('/lethihonglinh', function () {
    dd("Le Thi Hong Linh");

Route::get('/nguyenhuynhsaly', function () {
    return "Nguyễn Huỳnh Sa Ly";

});
>>>>>>> b039f7fe3ddc8968e9791c213b8d31817f483ae9
