<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\MediaSocial;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //                          ↓↓↓↓↓↓↓↓↓↓↓↓↓
    public function index(Request $request)
    {
        // Mulai query Berita
        $beritaQuery = Berita::latest();

        // Jika ada parameter kategori di URL, lakukan filter
        if ($request->filled('kategori')) {
            $beritaQuery->where('kategori', $request->kategori);
        }

        // Paginate hasilnya
        $berita = $beritaQuery->paginate(3)->withQueryString();
        //                 ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑  agar link pagination tetap membawa ?kategori=

        $medsos = MediaSocial::all();

        return view('master.blog', compact('berita', 'medsos'));
    }

    public function show($id)
    {
        $medsos = MediaSocial::all();
        $berita = Berita::findOrFail($id);

        return view('master.blog-details', compact('berita', 'medsos'));
    }
}
