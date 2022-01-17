<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Trait\Post as PostTrait;

class PostController extends Controller
{
    use PostTrait;
    public function index()
    {

        // foreach ($posts as $key => $value) {
        //     $posts[$key]->is_like = $this->getLikeDetail($value->id)['is_like'];
        //     $posts[$key]->like_count = $this->getLikeDetail($value->id)['like_count'];
        // }
        return view('posts.Index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(2),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.Show', [
            'post' => $post,
            'randomOrderPost' => $post->inRandomOrder()->get()->take(3)
        ]);
    }

    public function create()
    {
        return view('posts.Create');
    }

    public function storePost()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'intro' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();

        Post::create($attributes);

        return redirect('/')->with('success', 'post created successfully');
    }

    public function edit(Post $post)
    {
        return view('posts.Edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'intro' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $post->update($attributes);

        return redirect()->route('showDetail', [$post])->with('success', 'updated successfully');
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('index')->with('success', 'deleted successfully');
    }

    public function like($id)
    {
        Like::create([
            'user_id' => auth()->id(),
            'post_id' => $id
        ]);

        return redirect()->back();
    }
}
