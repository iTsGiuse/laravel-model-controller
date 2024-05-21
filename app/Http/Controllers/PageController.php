<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function movie() {
        $film = Movie::all();

        $data = [
            'films' => $film
        ];

        return view('movie', $data);
    }
}
