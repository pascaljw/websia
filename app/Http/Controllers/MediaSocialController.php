<?php

namespace App\Http\Controllers;

use App\Models\MediaSocial;
use Illuminate\Http\Request;

class MediaSocialController extends Controller
{
    public function index()
    {
        $medsos = MediaSocial::all();
        return view('admin.medsos.index', compact('medsos'));
    }

    public function create()
    {
        return view('admin.medsos.create');
    }

    public function store(Request $request)
    {
        MediaSocial::create([
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
        ]);

        return redirect()->route('admin.medsos.index')->with('berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $medsos = MediaSocial::findOrFail($id);
        return view('admin.medsos.edit', compact('medsos'));
    }

    public function update(Request $request, $id)
    {
        $medsos = MediaSocial::findOrFail($id);
        $medsos->facebook = $request->facebook;
        $medsos->instagram = $request->instagram;

        $medsos->save();

        return redirect()->route('admin.medsos.index')->with('berhasil');
    }
}
