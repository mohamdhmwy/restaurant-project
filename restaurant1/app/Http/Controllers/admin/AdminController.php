<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function orderstatus($typeorder)
    {
        $data['order'] = order::where('delivery_states',$typeorder)->get();

        return view('admin.dashbord.order_status',$data);
    }
    public function ordertime($time)
    {
        $data['order'] = order::where('created_at','>=',$time)->get();

        return view('admin.dashbord.order_status',$data);
    }
}
