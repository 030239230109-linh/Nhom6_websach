<?php

use Illuminate\Support\Facades\Route;



Route::get('/nguyenhuynhthuylinh', function () {
    return "Nguyễn Huỳnh Thùy Linh";
});

Route::get('/truonghomailinh', function () {
    return "Trương Hồ Mai Linh";
});
Route::get('/nguyenthithuylinh', function () {
    dd("Nguyen Thi Thuy Linh");
});

Route::get('/lethihonglinh', function () {
    dd("Le Thi Hong Linh");
});