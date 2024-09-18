<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\category;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Menu;
use Exception;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $data['specialmuno'] = Menu::withCount('order')->has('order')->where('is_showing', '1')->orderBy('order_count', 'desc')->get();
        $data['category'] = category::where('is_showing', '1')->get();
        $data['event'] = Event::all();
        $data['gallery'] = Gallery::all();
        $data['blog'] = Blog::all();
        $data['sidbarblog'] = Blog::all();
        $data['route'] = 'homepage';
        return view('user.home', $data);
    }

    public function menus()
    {
        $data['gallery'] = Gallery::all();
        $data['route'] = 'menu';
        $data['categories'] = category::where('is_showing', '1')->get();
        $data['specialmuno'] = Menu::withCount('order')->has('order')->where('is_showing', '1')->orderBy('order_count', 'desc')->get();
        return view('user.outPages.menu', $data);
    }
    public function showeventdetails($name)
    {
        $data['route'] = 'event';
        $data['event'] = Event::where('name', $name)->first();

        return view('user.outPages.event_details', $data);
    }
    public function blog()
    {
        $data['route'] = 'blog';
        $data['blog'] = Blog::all();
        $data['sidbarblog'] = Blog::all();
        $data['gallery'] = Gallery::all();

        return view('user.pages.blog', $data);
    }
    public function contact()
    {
        $data['gallery'] = Gallery::all();
        $data['sidbarblog'] = Blog::all();
        $data['route'] = 'contact';
        return view('user.pages.contact', $data);
    }
    public function Addcontact(Request $request)
    {
        try {
            $validateData = $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required|email',
                'message' => 'required|string',
            ]);
            $contact = new Contact();
            $contact->fill($validateData);
            $contact->save();
            return redirect()->route('user')->with('success', 'Successfully Send');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
