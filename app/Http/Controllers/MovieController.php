<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function topRated()
    {
        $top_50_movies =  DB::select("SELECT `name`, `rating` FROM `movies` ORDER BY `rating` DESC LIMIT 50;");

        return view('movies.top-rated', compact('top_50_movies'));
    }
}
