<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()

    {
        $movies = [
            'first',
            'second',
            'third',
            'fourth',
            'fifth',
            'sixth',
        ];
        return view('index.index', compact('movies'));
    }
}
