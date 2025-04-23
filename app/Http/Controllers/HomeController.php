<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slider::all();
        return view('master.index', compact('slides'));
    }

    
}
