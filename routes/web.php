<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

Route::get('/kiemtra1','App\Http\Controllers\kiemtra1Controller@kiemtra1'); 
Route::post('/tinhtuoi','App\Http\Controllers\kiemtra1Controller@tinhtuoi');

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");

Route::get("/qlsach/themtheloai","App\Http\Controllers\BookController1@themtheloai");