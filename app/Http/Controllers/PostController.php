<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.Index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
        ]);
    }

    public  function show(Post $post)
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
}
