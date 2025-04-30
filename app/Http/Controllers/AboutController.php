<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TentangKamiController;
use App\Models\TentangKami;
use App\Models\Mahasiswa;

class AboutController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::latest()->first();
        $jumlahMahasiswa = Mahasiswa::count();
        return view('master.about', compact('tentangKami', 'jumlahMahasiswa'));
    }
}
