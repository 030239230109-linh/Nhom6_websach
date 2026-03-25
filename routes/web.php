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

use Illuminate\Support\Facades\DB;


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

/*bài tập 7.1 */
Route::get("/qlmovie/genres","App\Http\Controllers\MovieController@genres");
/*bài tập 7.5 */
Route::get("/qlmovie/canada","App\Http\Controllers\MovieController@canada");
/*bài tập 7.6 */
Route::get("/qlmovie/action","App\Http\Controllers\MovieController@action");
/*bài tập 7.7 */
Route::get("/qlmovie/hot","App\Http\Controllers\MovieController@hot");
/*bài tập 7.4 */
Route::get("/qlmovie/runtime_over_120","App\Http\Controllers\MovieController@RunTimeOver120"); 

Route::get("/lehoangan", function() {return 'Lê Hoàng An';});

Route::get('/tenban', function () {
    return 'Le Nguyen Nhu Quynh - Nhóm 6';
});

/*bài tập 7.2 */
Route::get("/qlmovie/topvote","App\Http\Controllers\MovieController@topvote");

Route::get("/lehoangan", function() {return 'Lê Hoàng An';});

Route::get('/tenban', function () {
    return 'Le Nguyen Nhu Quynh - Nhóm 6';});

// bài tập 7.3
Route::get('/73_top_budget', function () {
    $movies = DB::table('movie')
        ->orderBy('budget', 'desc')
        ->limit(10)
        ->get();

    return view('73_top_budget', compact('movies'));
}); 

