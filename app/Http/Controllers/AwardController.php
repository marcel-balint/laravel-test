<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {
        $data = 'This is the data!';
        $awards = [
            'Oscars',
            'Golden Globes',
            'Bafta',
            'Emmy'
        ];
        return view('awards.index', compact('data', 'awards'));
    }
}
