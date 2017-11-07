<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
}

