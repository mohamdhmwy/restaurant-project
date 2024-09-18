<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Comment;
use App\Models\Menu;
use Illuminate\Http\Request;

class CategoryMenuController extends Controller
{
    public function ShowCategory($slug)
{
    if (category::where('slug', $slug)->exists()) {

        $data['route'] = 'menu';
        $data['ShowCategory'] = category::with('menu')->where('is_showing', '1')->where('slug', $slug)->first();
        $data['specialmuno'] = Menu::withCount('order')->has('order')->where('is_showing', '1')->orderBy('order_count', 'desc')->get();
        return view('user.outPages.showcategory', $data);
    } else {
        return redirect('/')->with('error', 'this category not found');
    }
}


public function showtype($class)
{
    $data['route'] = 'menu';
    $data['class'] = $class;
    $data['specialmuno'] = Menu::withCount('order')->has('order')->where('is_showing', '1')->orderBy('order_count', 'desc')->get();
    $data['typemenu'] = Menu::where('is_showing', '1')->where('type', 'like', '%' . $class . '%')->get();
    return view('user.outPages.typemenu', $data);
}

public function moreCategory()
{
    $data['route'] = 'category';
    $data['categories'] = category::where('is_showing', '1')->get();
    return view('user.outPages.category', $data);
}

public function singelmenu($category_slug, $menu_slug)
{
    if (category::where('slug', $category_slug)->exists()) {
        if (Menu::where('slug', $menu_slug)->where('is_showing', '1')->exists()) {


            $data['route'] = 'menu';
            $data['menus'] = Menu::where('slug', $menu_slug)->first();
            $data['comment'] = Comment::where('menu_slug', $menu_slug)->get();
            return view('user.outPages.singleMenu', $data);
        } else {
            return redirect()->route('user')->with('error', 'this product not found');
        }
    } else {
        return redirect()->route('user')->with('error', 'this category not found');
    }
}
}





