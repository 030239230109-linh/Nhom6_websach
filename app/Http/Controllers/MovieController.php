<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function getGenres()
    {
        // Truy vấn dữ liệu từ bảng genres
        $genres = DB::table('genres')->select('genre_name', 'genre_name_vn')->get();

        // Trả về view để hiển thị
        return view('view_genres', compact('genres'));
    }
}
