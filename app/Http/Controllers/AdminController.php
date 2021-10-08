<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Postingan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $forum = Forum::all();
        $postingan = Postingan::all();
        return view('admin', compact('users', 'forum', 'postingan'));
    }
    public function addforum(Request $request)
    {
        // dd(Auth::user()->id);
        // dd($request);
        $this->validate($request, [
            'title' => 'required|max:26',
            'content' => 'required',
        ]);
        $parent_id = $request->forum;
        if (!$parent_id) {
            $parent_id = 0;
        }
        $data = [
            "parent_id" => $parent_id,
            'type' => 1,
            'title' => $request->title,
            'content' => $request->content,
            'created_by' => Auth::user()->id,
            // 'created_by' => null,
        ];
        Forum::create($data);
        return redirect()->back()->with('success', 'data forum berhasil di tambahkan');
    }
}
