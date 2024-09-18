<?php

use App\Models\Blog;
use App\Models\Cart;
use App\Models\category;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\notification;
use App\Models\order;
use App\Models\reservation;
use App\Models\User;
use App\Models\WorkTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class Helper

{
    public static function totalCartAmount($user_id = '')
    {
        if (Auth::check()) {
            $user_id = Auth::id();
            if ($user_id) {
                return Cart::where('user_id', $user_id)->sum('amount');
            } else {
                return 0;
            }
        }
    }
    public static function CountCart($user_id = '')
    {
        if (Auth::check()) {
            $user_id = Auth::id();
            if ($user_id) {
                return  Cart::where('user_id', $user_id)->sum('qty');
            }
        }
    }
    ////////////// notification

    public static function notification()
    {
        return  notification::where('read_at', '0')->latest()->take(3)->get();
    }
    public static function CountNotification()
    {
        return  notification::where('read_at', '0')->count();
    }
    public static function ReadNotification()
    {
        return Notification::where('read_at', 0)->exists();
    }



    
    public static function special_menu_navbar()
    {
        return  Menu::where('special', '1')->where('is_showing', '1')->latest()->take(8)->get();
    }
    public static function special_menu_navbar2()
    {
        return  Menu::where('special', '1')->where('is_showing', '1')->latest()->skip(8)->take(9)->get();
    }
    public static function category_navbar()
    {
        return  category::where('is_showing', '1')->latest()->take(10)->get();
    }
    public static function work_time()
    {
        return  WorkTime::all();
    }
    public static function trend_blog()
    {
        return  Blog::all();
    }
    public static function contact()
    {
        return  Contact::where('read_at', '0')->latest()->take(3)->get();
    }
    public static function CountMessage()
    {
        return  Contact::where('read_at', '0')->count();
    }

    ////////////// dashbord info


    public static function TotalNewOrder()
    {
        return  order::where('delivery_states', 'New')->count();
    }
    public static function TotalPenddingOrder()
    {
        return  order::where('delivery_states', 'Pendding')->count();
    }
    public static function TotalDeliveredOrder()
    {
        return  order::where('delivery_states', 'Delivered')->count();
    }
    public static function TotalCancelledOrder()
    {
        return  order::where('delivery_states', 'Cancelled')->count();
    }
    public static function TotalUsers()
    {
        return  User::select('id')->count();
    }

    ///////// Reservation
    public static function Reservation_Notification()
    {
        return  reservation::where('read_at','0')->latest()->take(3)->get();
    }
    public static function Count_Reservation()
    {
        return  reservation::select('id')->count();
    }
    public static function Count_Reservation_Notification()
    {
        return  reservation::where('read_at','0')->count();
    }
    public static function Total_Reservation_Last_Day()
    {
        $last24hours = Carbon::now()->subDay();
        return  reservation::where('created_at','>=',$last24hours)->count();
    }




    ///////// Total Order
    public static function TotalOrder()
    {
        return  order::select('id')->count();
    }
    public static function TotalSales()
    {
        return  order::sum('total');
    }
    ///////// Total Order Last Month
    public static function Month()
    {
        return  Carbon::now()->subMonth();
    }
    public static function TotalOrderLastMonth()
    {
        $last24hours = Carbon::now()->subMonth();
        return  order::where('created_at', '>=', $last24hours)->count();
    }
    public static function TotalSalesLastMonth()
    {
        $last24hours = Carbon::now()->subMonth();
        return  order::where('created_at', '>=', $last24hours)->sum('total');
    }

    ///////// Total Order Last Week
    public static function Week()
    {
        return  Carbon::now()->subWeek();
    }
    public static function TotalOrderLastWeek()
    {
        $last24hours = Carbon::now()->subWeek();
        return  order::where('created_at', '>=', $last24hours)->count();
    }
    public static function TotalSalesLastWeek()
    {
        $last24hours = Carbon::now()->subWeek();
        return  order::where('created_at', '>=', $last24hours)->sum('total');
    }

    //////// Total Order Last Day
    public static function Day()
    {
        return  Carbon::now()->subDay();
    }
    public static function TotalOrderLastDay()
    {
        $last24hours = Carbon::now()->subDay();
        return  order::where('created_at', '>=', $last24hours)->count();
    }
    public static function TotalSalesLastDay()
    {
        $last24hours = Carbon::now()->subDay();
        return  order::where('created_at', '>=', $last24hours)->sum('total');
    }
}
