<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMenu;
use App\Http\Requests\UpdateMenu;
use App\Models\category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['menu'] = Menu::all();

        return view('admin.menu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['category'] = category::all();
        return view('admin.menu.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMenu $request)
    {

        $Validated = $request->validated();
        $image = $request->file('image')->store('public/assets/uplode/menu');
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->slug = $request->slug;
        $menu->title = $request->title;
        $menu->dis = $request->dis;
        $menu->category_id = $request->category_id;
        $menu->price = $request->price;
        $menu->dis_price = $request->dis_price;
        $menu->special = $request->spe ? '1' : '0';
        $menu->is_showing = $request->is_showing ? '1' : '0';
        $menu->type = $request->type;
        $menu->image = $image;
        $menu->save();
        return redirect()->route('menu.index')->with('success','Menu Created Successfuly ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {

        $data['menu'] = $menu;
        return view('admin.menu.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $data['category'] = category::all();
        $data['menu'] = $menu;
        return view('admin.menu.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenu $request, Menu $menu)
    {
        $Validated = $request->validated();
        $image = $menu->image;
        if ($request->hasFile('image')) {
            Storage::delete($image);
            $image = $request->file('image')->store('public/assets/uplode/menu');
        }
        $menu->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'title' => $request->title,
            'dis' => $request->dis,
            'category_id' => $request->category_id,
            'image' => $image,
            'price' => $request->price,
            'dis_price' => $request->dis_price,
            'is_showing' => $request->is_showing ? '1' : '0',
            'special' => $request->spe ? '1' : '0',
            'type' =>$request->type,
        ]);

        return redirect()->route('menu.index')->with('success','Menu Updated Successfuly ');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu = Menu::where('id',$menu->id)->first();
        $menu->delete();
        $image = $menu->image;
        Storage::delete($image);
        return redirect()->route('menu.index')->with('success','Menu Deleted Successfuly ');
    }
}
