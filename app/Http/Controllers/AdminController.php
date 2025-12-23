<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\TugasAkhir;

class AdminController extends Controller
{
    public function index()
    {
        $mahasiswaCount = Mahasiswa::count();
        $dosenCount = Dosen::count();
        $tugasAkhirCount = TugasAkhir::count();
        
        return view("admin.index", compact('mahasiswaCount', 'dosenCount', 'tugasAkhirCount'));
    }
}
