<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentangKamis = TentangKami::all();
        return view('admin.tentang_kami.index', compact('tentangKamis')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tentang_kami.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->all();

        if($request->hasFile('foto')){
            $data['foto'] = $request->file('foto')->store('tentangkami', 'public');
        }

        TentangKami::create($data);

        return redirect()->route('admin.tentang_kami.index')->with('berhasil', 'Data Tentang Kami berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tentangKami = TentangKami::findOrFail($id);
        return view('admin.tentang_kami.edit', compact('tentangKami'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $tentangKami = TentangKami::findOrFail($id);
        $data = $request->all();

        if($request->hasFile('foto')){
            if($tentangKami->foto && file_exists(public_path('storage/'.$tentangKami->foto))){
                unlink(public_path('storage/'.$tentangKami->foto));
            }
            $data['foto'] = $request->file('foto')->store('tentangkami', 'public');
        }

        $tentangKami->update($data);

        return redirect()->route('admin.tentang_kami.index')->with('Sukses', 'Data Tentang kami berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::user()->isSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $tentangKami = TentangKami::findOrFail($id);

        if($tentangKami->foto && file_exists(public_path('storage/'.$tentangKami->foto))){
            unlink(public_path('storage/'.$tentangKami->foto));
        }

        $tentangKami->delete();

        return redirect()->route('admin.tentang_kami.index')->with('Berhasil', 'Data Tentang Kami berhasil dihapus.');
    }
}
