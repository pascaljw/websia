<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('admin.dosen.index', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'jabatan' => 'required|max:100',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $fotoPath = $request->file('foto')->store('dosen-foto', 'public');

        Dosen::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('admin.dosen.index')->with('sukses', 'Dosen Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        return view('admin.dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('admin.dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'jabatan' => 'required|max:100',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($dosen->foto);

            $fotoPath = $request->file('foto')->store('dosen-foto', 'public');
            $dosen->foto = $fotoPath;

        }

        $dosen->nama = $request->nama;
        $dosen->jabatan = $request->jabatan;
        $dosen->save();

        return redirect()->route('admin.dosen.index')->with('sukses', 'data dosen berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        Storage::disk('public')->delete($dosen->foto);

        $dosen->delete();

        return redirect()->route('admin.dosen.index')->with('sukses', 'Dosen berhasil dihapus');
    }
}
