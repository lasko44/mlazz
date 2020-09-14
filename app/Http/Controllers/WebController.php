<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function indexHome()
    {
        return view('home');
    }

    public function indexAbout()
    {
        return view('about');
    }
}
