<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\MediaSocial;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        $medsos = MediaSocial::all();
        return view("master.portfolio", compact('galeris', 'medsos'));
    }
    
}
