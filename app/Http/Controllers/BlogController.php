<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\MediaSocial;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        $medsos = MediaSocial::all();
        return view("master.blog", compact('berita', 'medsos'));
    }

    public function show($id)
    {
        $medsos = MediaSocial::all();
        $berita = Berita::findOrFail($id);
        return view('master.blog-details', compact('berita', 'medsos'));
    }
}
