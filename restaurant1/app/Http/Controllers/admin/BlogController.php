<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['blog'] = Blog::all();
        return view('admin.blog.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validateData = $request->validate([
                'name' => 'required|string|max:255',
                'dis' => 'required|string',
                'price' => 'required|integer',
            ]);
            $image = $request->file('image')->store('public/assets/uplode/blog');
            $blog = new Blog();
            $blog->fill($validateData);
            $blog->image = $image;
            $blog->save();
            return redirect()->route('blog.index')->with('success', 'Blog Created Successfuly');



        }catch(Exception $e){
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
        $data['blog'] = Blog::where('id',$id)->first();
        return view('admin.blog.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $blog = Blog::where('id', $id)->first();
            $image = $blog->image;
            if ($request->hasFile('image')) {
                Storage::delete($image);
                $image = $request->file('image')->store('public/assets/uplode/blog');
            }
            $validateData = $request->validate([
                'name' => 'string|max:255',
                'dis' => 'string',
                'price' => 'integer',
            ]);
            $blog->update([
                'image' => $image,
                $blog->fill($validateData),

            ]);

            return redirect()->route('blog.index')->with('success', 'Blog Updated Successfuly ');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::where('id', $id)->first();
        Storage::delete($blog->image);
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog Deleted Successfuly ');


    }
}
