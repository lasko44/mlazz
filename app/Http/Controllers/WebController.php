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

    public function indexProjects(){
        return view('projects');
    }

    public function indexResume(){

    }

    public function showCav(){
        return view('cav');
    }

    public function showDC(){
        return view('dc');
    }

    public function showOther(){
        return view('other');
    }
}
