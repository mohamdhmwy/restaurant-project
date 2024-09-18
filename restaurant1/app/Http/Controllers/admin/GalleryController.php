<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['gallery'] = Gallery::all();
        return view('admin.gallery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $image = $request->file('image')->store('public/assets/uplode/gallery');
            $gallery = new Gallery();
            $gallery->image = $image;
            $gallery->save();
            return redirect()->route('gallery.index')->with('success', 'Gallery Created Successfuly ');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::where('id',$id)->first();
        Storage::delete($gallery->image);
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success','Gallery Deleted Successfuly ');

    }
}
