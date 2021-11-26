<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(){
        $post = new Post(); //INSERT
        $post->name = request()->name;
        $post->user_id = auth()->user()->id;
        $post->category_id = request()->category_id;
        $post->save();
        return redirect('/');
    }

    public function create()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories,
        ];
        return view('posts.create', $data);
    }
    public function edit($post_id)
    {
        $categories = Category::all();
        $posts = Post::find($post_id);

        $data = [
            'categories' => $categories,
            'posts' => $posts,
        ];
        return view('edit', $data);
    }
}
