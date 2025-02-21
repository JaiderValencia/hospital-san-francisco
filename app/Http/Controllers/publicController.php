<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class publicController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function services(): View
    {        
        return view('pages.services');
    }
}
