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

Route::get("/lehoangan", function() {return 'Lê Hoàng An';});

Route::get('/tenban', function () {
    return 'Le Nguyen Nhu Quynh - Nhóm 6';
});

Route::get("/qlmovie/topvote","App\Http\Controllers\MovieController@topvote");