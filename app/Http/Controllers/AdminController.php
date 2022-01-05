<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.Index', [
            'posts' => Post::all(),
        ]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
