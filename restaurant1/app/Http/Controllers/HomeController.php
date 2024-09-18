<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['specialmuno'] = Menu::where('special', '1')->where('is_showing', '1')->get();
        $data['category'] = category::where('is_showing', '1')->get();
        $data['type'] = Menu::where('type', 'like', '%Lunch%')->get();
        $data['route'] = 'homepage';
        return view('user.home', $data);    }
}




