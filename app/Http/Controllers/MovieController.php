<?php


namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('rating')
            ->where('votes_nr', '>=', 10000)
            ->limit(20)
            ->get();
        return view('index.index', compact('movies'));
    }

    public function topRated()
    {
        $top_50_movies =  DB::select("SELECT `name`, `rating` FROM `movies` ORDER BY `rating` DESC LIMIT 50;");

        return view('movies.top-rated', compact('top_50_movies'));
    }

    public function shawshank()
    {
        $movie_shawshank_redemption = DB::select("SELECT * FROM movies WHERE name LIKE '%The Shawshank Redemption%';");
        return view('movies.detail', compact('movie_shawshank_redemption'));
    }

    public function search(Request $request)
    {
        $input_char = $request->input('name', false);
        // $input_char = $_GET['name'] ?? null;
        $movies_by_input = DB::select("SELECT * FROM `movies` WHERE `name` LIKE ?;", ["%$input_char%"]);


        return view('movies.search', compact('movies_by_input'));
    }

    public function movieDetail($movie_id)
    {
        $movie_details = DB::select("SELECT * FROM `movies` WHERE `id` = ?", [$movie_id]);
        return view('movies.movie-detail', compact('movie_details'));
    }
}
