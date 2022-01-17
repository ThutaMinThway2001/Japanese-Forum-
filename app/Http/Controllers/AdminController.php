<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.Index', [
            'posts' => Post::all(),
            'users_count' => User::where('isAdmin', 0)->get()->count(),
            'admin' => User::where('isAdmin', 1)->get(),

        ]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
    public function deletePost(Post $post)
    {
        $post->delete();

        return redirect()->back();
    }
    public function deleteUser(User $user)
    {
        $user->delete();

        return redirect()->back();
    }
}
