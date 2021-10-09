<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Komentar;
use App\Models\Postingan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $forum = Forum::all();
        $postingan = Postingan::all();
        $posts = Postingan::latest()->first();
        // dd($postlast);
        return view('users.user', compact('forum', 'postingan', 'posts'));
    }
    public function postinganku($id)
    {
        $idpost = $id;
        $postingan = Postingan::all();
        $posts = Postingan::where('id', $idpost)->first();
        $komentar = Komentar::where('post_id', $idpost)->get();
        // dd($posts->users);
        return view('users.postinganku', compact('posts', 'postingan', 'komentar'));
    }
    public function forumku($id)
    {
        $forumku = Forum::with('posts.users')->get();
        $posts = Postingan::where('id', $id)->first();
        return view('users.forumku', compact('forumku', 'posts'));
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
    public function komentar(Request $request)
    {
        $this->validate($request, [
            'komen' => 'required',
        ]);

        $data = [
            "post_id" => $request->id,
            'komen' => $request->komen,
            'created_by' => Auth::user()->id,
            // 'created_by' => null,
        ];
        Komentar::create($data);
        return redirect()->back();
    }
}
