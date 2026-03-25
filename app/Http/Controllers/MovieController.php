<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    // 7.1
    public function genres(){
        $genres = DB::table('genre')->get();
        return view('qlmovie.genres', compact('genres'));
    }
// 7.5
    public function canada(){
        $movies = DB::table('movie')
            ->where('country_name', 'Canada')
            ->get();

        return view('qlmovie.canada', compact('movies'));
    }

    // 7.6
 public function action(){
    $movies = DB::table('movie')
        ->join('movie_genre', 'movie.id', '=', 'movie_genre.id_movie')
        ->join('genre', 'movie_genre.id_genre', '=', 'genre.id')
        ->where('genre.genre_name', 'Action')
        ->select('movie.*')
        ->get();

    return view('qlmovie.action', compact('movies'));
}

// 7.7
public function hot(){
    $movies = DB::table('movie')
        ->where('vote_average', '>', 8)
        ->where('vote_count', '>', 10000)
        ->orderBy('vote_average', 'desc') // 🔥 sắp xếp phim hot nhất lên đầu
        ->get();

    return view('qlmovie.hot', compact('movies'));
}

// 7.4
    function RunTimeOver120() 
    {
        $movies = DB::table('movie')
        ->select('movie_name','release_date','runtime')
        ->where('runtime','>',120)
        ->limit(10)
        ->get();

        return view("qlmovie.runtime_over_120", compact("movies"));
    }


    // 7.2
    public function topvote(){
        $movies = DB::table('movie')
            ->orderByDesc('vote_average')
            ->limit(10)
            ->get();

        return view('qlmovie.topvote', compact('movies'));
    }
}