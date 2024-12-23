<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return redirect('/lumpia');
    }

    public function about()
    {
        return view('about');
    }
}

