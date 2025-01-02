<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.posts', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $posts = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string'
        ]);
        Post::create($posts);
        return redirect()->route('posts.index');
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request,$id)
    {
        $posts = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string'
        ]);
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return view('posts.edit', compact('post'));
    }
}
