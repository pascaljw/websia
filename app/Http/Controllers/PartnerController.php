<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);
    
        $path = $request->file('logo')->store('partners', 'public');
    
        Partner::create([
            'logo' => $path,
        ]);
    
        return redirect()->route('admin.partner.index');
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
    public function edit(Partner $partner)
    {
                return view('admin.partner.edit', compact('partner'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);
    
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('partners', 'public');
            $partner->logo = $path;
        }
    
        $partner->save();
    
        return redirect()->route('admin.partner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::findOrFail($id);

    // Hapus file gambar dari storage
    if (Storage::disk('public')->exists($partner->logo)) {
        Storage::disk('public')->delete($partner->logo);
    }

    // Hapus data partner dari database
    $partner->delete();

    return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil dihapus.');
    }
}
