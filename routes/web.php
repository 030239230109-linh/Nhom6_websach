<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD

Route::get('/nguyenhuynhthuylinh', function () {
    return "Nguyễn Huỳnh Thùy Linh";
});
=======
<<<<<<< HEAD

Route::get('/truonghomailinh', function () {
    return "Trương Hồ Mai Linh";
});
=======
Route::get('/nguyenthithuylinh', function () {
    dd("Nguyen Thi Thuy Linh");
});

Route::get('/kiemtra1','App\Http\Controllers\kiemtra1Controller@kiemtra1'); 
Route::post('/tinhtuoi','App\Http\Controllers\kiemtra1Controller@tinhtuoi');

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");

Route::get("/qlsach/themtheloai","App\Http\Controllers\BookController1@themtheloai");
<<<<<<< HEAD

Route::get("/lehoangan", function() {return 'Lê Hoàng An';});
=======
Route::get('/tenban', function () {
    return 'Le Nguyen Nhu Quynh - Nhóm 6';
});
>>>>>>> cfce62b717191661e1f0606b085d69df2fa14a6a
>>>>>>> 9c0a3fa1167db62900147759931d826ed9151df4
>>>>>>> 6fafaec210299e4ee7f2ce346335a6e943c33641
