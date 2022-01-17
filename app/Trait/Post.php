<?php

namespace App\Trait;

use App\Models\Like;

trait Post
{
    public function getLikeDetail($id)
    {
        $post_like = Like::where('id', $id)->where('user_id', auth()->id())->first();

        $post_like ? $is_like = 'true' : $is_like = 'false';

        $like_count = Like::where('id', $id)->count();
        $data['like_count'] = $like_count;
        $data['is_like'] = $is_like;

        return $data;
    }
}
