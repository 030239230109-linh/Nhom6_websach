<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    // 7.2
    public function topvote(){
        $movies = DB::table('movie')
            ->orderByDesc('vote_average')
            ->limit(10)
            ->get();

        return view('qlmovie.topvote', compact('movies'));
    }
}