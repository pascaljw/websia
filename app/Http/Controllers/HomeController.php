<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\MediaSocial;

class HomeController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->take(3)->get();
        $beritas = Berita::latest()->take(3)->get();
        $slides = Slider::all();
        $medsos = MediaSocial::all();
        return view('master.index', compact('slides', 'beritas', 'galeris', 'medsos'));
    }


    
}
