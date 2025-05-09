<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\MediaSocial;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        $medsos = MediaSocial::all();
        return view('master.team', compact('dosens', 'medsos'));
    }
}
