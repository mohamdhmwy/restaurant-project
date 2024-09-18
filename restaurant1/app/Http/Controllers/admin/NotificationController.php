<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $data['notification'] = notification::where('read_at', '0')->get();
        return view('admin.Notification.index', $data);
    }
}
