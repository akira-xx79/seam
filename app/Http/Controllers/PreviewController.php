<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreviewController extends Controller
{
    public function Top()
    {
        return view('top');
    }

    public function price()
    {
        return view('price');
    }

    public function project()
    {
        return view('project');
    }
}
