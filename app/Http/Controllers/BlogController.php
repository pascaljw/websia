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
}
