<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class TeamController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('master.team', compact('dosens'));
    }
}
