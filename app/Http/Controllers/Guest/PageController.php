<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function movies(){
        $movies = Movie::orderBy('id')->get();
        return view('movies', compact('movies'));
    }

    public function contacts(){
        return view('contacts');
    }
}
