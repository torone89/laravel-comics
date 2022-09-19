<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = config('comics');
        $comics = $data;
        return view('home', compact('comics'));
    }
}
