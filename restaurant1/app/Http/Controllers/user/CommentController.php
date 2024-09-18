<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function AddComments(Request $request)
    {
        if (Auth::check()) {
            $comment = new Comment();
            $comment->comment = $request->comment;
            $comment->menu_id = $request->menu_id;
            $comment->menu_slug = $request->menu_slug;
            $comment->save();
            return back()->with('success', 'Comment Added Successfully');
        } else {
            return back()->with('error', 'Login First');
        }
    }
}
