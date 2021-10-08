<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Postingan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $forum = Forum::all();
        $postingan = Postingan::all();
        return view('users.user', compact('forum', 'postingan'));
    }
    public function postinganku()
    {
        $postingan = Postingan::all();
        return view('users.postinganku', compact('postingan'));
    }
    public function forumku()
    {
        $forumku = Forum::all();
        return view('users.forumku', compact('forumku'));
    }
}
