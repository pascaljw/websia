<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TentangKamiController;
use App\Models\TentangKami;

class AboutController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::latest()->first();
        return view('master.about', compact('tentangKami'));
    }
}
