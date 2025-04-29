<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $imagePath = $request->file('image')->store('slider', 'public');

        slider::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.slider.index')->with('Berhasil', 'Mengunggah Foto Slider.');
    }

    /**
     * Display the specified resource.
     */
    public function show(slider $slider)
    {
        return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, slider $slider)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $slider->title = $request->title;

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($slider->image);
            
            $imagePath = $request->file('image')->store('slider', 'public');
            $slider->image = $imagePath;
        }
            
        $slider->save();

        return redirect()->route('admin.slider.index')->with('Berhasil', 'Mengunggah Foto.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(slider $slider)
    {
        Storage::disk('public')->delete($slider->image);
        
        $slider->delete();
        return redirect()->route('admin.slider.index')->with('Berhasil', 'Menghapus Foto.');
    }
}
