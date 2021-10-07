<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Postingan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $forum = Forum::all();
        $postingan = Postingan::all();
        return view('admin', compact('users', 'forum', 'postingan'));
    }
}
