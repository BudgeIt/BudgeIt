<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

    public function getHomePage()
    {
        return view('pages.home');
    }

}
