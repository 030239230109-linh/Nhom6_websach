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

Route::get("/lehoangan", function() {return 'Lê Hoàng An';});

Route::get('/lenguyenquynhnhu', function () {
    return 'Le Nguyen Nhu Quynh - Nhóm 6';
});

Route::get('/lethihonglinh', function () {
    dd("Le Thi Hong Linh");
});

Route::get('/nguyenhuynhsaly', function () {
    return "Nguyễn Huỳnh Sa Ly";

});
