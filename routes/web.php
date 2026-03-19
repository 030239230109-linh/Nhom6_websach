<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Test route từng thành viên
|--------------------------------------------------------------------------
*/

Route::get('/nguyenhuynhthuylinh', function () {
    return "Nguyễn Huỳnh Thùy Linh";
});

Route::get('/truonghomailinh', function () {
    return "Trương Hồ Mai Linh";
});

Route::get('/nguyenthithuylinh', function () {
    return "Nguyen Thi Thuy Linh";
});

Route::get('/lehoangan', function () {
    return 'Lê Hoàng An';
});

Route::get('/lenguyenquynhnhu', function () {
    return 'Le Nguyen Nhu Quynh - Nhóm 6';
});

Route::get('/lethihonglinh', function () {
    return "Le Thi Hong Linh";
});

Route::get('/nguyenhuynhsaly', function () {
    return "Nguyễn Huỳnh Sa Ly";
});

/*
|--------------------------------------------------------------------------
| Movie routes (Bài tập 7)
|--------------------------------------------------------------------------
*/

Route::get('/qlmovie/genres', 'App\Http\Controllers\MovieController@genres');                // 7.1
Route::get('/qlmovie/topvote', 'App\Http\Controllers\MovieController@topvote');              // 7.2
Route::get('/qlmovie/topbudget', 'App\Http\Controllers\MovieController@topbudget');          // 7.3
Route::get('/qlmovie/runtime_over_120', 'App\Http\Controllers\MovieController@RunTimeOver120'); // 7.4
Route::get('/qlmovie/canada', 'App\Http\Controllers\MovieController@canada');                // 7.5
Route::get('/qlmovie/action', 'App\Http\Controllers\MovieController@action');                // 7.6
Route::get('/qlmovie/hot', 'App\Http\Controllers\MovieController@hot');                      // 7.7