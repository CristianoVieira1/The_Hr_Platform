<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('front.pages.home');
    }

    public function about()
    {
        return view('front.pages.about');
    }

    public function opportunities()
    {
        return view('front.pages.opportunities');
    }
}

