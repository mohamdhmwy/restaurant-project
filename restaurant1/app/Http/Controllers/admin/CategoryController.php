<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategory;
use App\Http\Requests\UpdateCategory;
use App\Models\category;
use App\Models\Menu;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\select;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['category'] = category::all();
        return view('admin.categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategory $request)
    {
        $Validated = $request->validated();
        $image = $request->file('image')->store('public/assets/uplode/category');
        $category = new category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->dis = $request->dis;
        $category->is_showing = $request->is_showing ? '1' : '0';
        $category->image = $image;
        $category->save();
        return redirect()->route('category.index')->with('success','Category Created Successfuly ');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        $data['category'] = $category;
        return view('admin.categories.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        $data['category'] = $category;
        return view('admin.categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategory $request, category $category)
    {
        $Validated = $request->validated();
        $image = $category->image;
        if ($request->hasFile('image')) {
            Storage::delete($image);
            $image = $request->file('image')->store('public/assets/uplode/category');
        }
        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'dis' => $request->dis,
            'is_showing' => $request->is_showing ? '1' : '0',
            'image' => $image,
        ]);
        return redirect()->route('category.index')->with('success','Category updated successfuly ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $categ = category::where('id', $category->id)->first();
        $categ->delete();
        $image = $category->image;
        Storage::delete($image);


        $menu = Menu::where('category_id', $category->id)->get();

        foreach ($menu as $menu) {
            if (Menu::where('category_id', $category->id)->exists()) {
                Storage::delete($menu->image);
            }
        }
        $menus = Menu::where('category_id', $category->id)->get();
        Menu::destroy($menus);

        return redirect()->route('category.index')->with('success','Category deleted successfuly');
    }
}
