<?php

namespace App\Http\Controllers;

use App\Models\TugasAkhir;
use Illuminate\Http\Request;

class TugasAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = TugasAkhir::all();
        return view('admin.tugas_akhir.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tugas_akhir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama_mahasiswa' => 'required',
            'nim' => 'required',
            'judul' => 'required',
            'abstrak' => 'required',
            'pembimbing' => 'required'
        ]);

        TugasAkhir::create($request->all());

        return redirect()->route('admin.tugas_akhir.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasAkhir $tugasAkhir)
    {
        return view('admin.tugas_akhir.show', compact('tugasAkhir'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TugasAkhir $tugasAkhir)
    {
        return view('admin.tugas_akhir.edit', compact('tugasAkhir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TugasAkhir $tugasAkhir)
    {
        $request->validate([
            'nama_mahasiswa' => 'nullable',
            'nim' => 'nullable',
            'judul' => 'nullable',
            'abstrak' => 'nullable',
            'pembimbing' => 'nullable'
        ]);

        $tugasAkhir->update($request->all());

        return redirect()->route('admin.tugas_akhir.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TugasAkhir $tugasAkhir)
    {
       $tugasAkhir->delete();

        return redirect()->route('admin.tugas_akhir.index')->with('success', 'Data berhasil dihapus.'); 
    }
}
