<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storeComment(Post $post)
    {
        request()->validate([
            'commentBox' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('commentBox')
        ]);

        return back();
    }
}
