<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\MediaSocial;
use App\Models\TugasAkhir;


class ThesisController extends Controller
{
    public function index()
    {
        $medsos = MediaSocial::all();
        $data = TugasAkhir::all();
        return view('master.thesis', compact('medsos', 'data'));
    }
}
