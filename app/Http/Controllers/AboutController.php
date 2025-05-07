<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TentangKamiController;
use App\Models\TentangKami;
use App\Models\Mahasiswa;
use App\Models\Partner;

class AboutController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::latest()->first();
        $jumlahMahasiswa = Mahasiswa::count();
        $partner = Partner::all();
        return view('master.about', compact('tentangKami', 'jumlahMahasiswa', 'partner'));
    }
}
