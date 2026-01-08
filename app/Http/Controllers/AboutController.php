<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\MediaSocial;
use App\Models\TentangKami;
use Illuminate\Http\Request;
use App\Http\Controllers\TentangKamiController;

class AboutController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::latest()->first();
        $jumlahMahasiswa = Mahasiswa::count();
        $jumlahDosen = Dosen::count();
        $partner = Partner::all();
        $medsos = MediaSocial::all();
        return view('master.about', compact('tentangKami', 'jumlahMahasiswa', 'jumlahDosen', 'partner', 'medsos'));
    }
}
