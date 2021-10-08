<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function addpost(Request $request)
    {
        // dd(Auth::user()->id);
        // dd($request);
        $this->validate($request, [
            'forum' => 'required',
            'content' => 'required',
        ]);
        $forum_id = $request->forum;
        if (!$forum_id) {
            $forum_id = 0;
        }
        $data = [
            "forum_id" => $forum_id,
            'content' => $request->content,
            'created_by' => Auth::user()->id,
            // 'created_by' => null,
        ];
        Postingan::create($data);
        return redirect()->back()->with('success', 'postingan anda berhasil di tambahkan');
    }
}
