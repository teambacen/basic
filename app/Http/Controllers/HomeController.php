<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();
        return view('home', compact('places'));
    }
}
