<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view("master.portfolio", compact('galeris'));
    }
    
}
