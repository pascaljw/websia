<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view("master.blog", compact('berita'));
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('master.blog-details', compact('berita'));
    }
}
