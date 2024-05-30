<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function home()
    {
        
            $posts = Post::latest()->get();
            dd($posts); // Debugging output
            return view('home', compact('posts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:280',
        ]);
        {
            $request->validate([
                'content' => 'required|string',
            ]);
    
            $user = Auth::user();
    
            // Create a new post
            $post = new Post();
            $post->user_id = $user->id;
            $post->op = $user->name; // Set op field to user's name
            $post->content = $request->content;
            $post->save();
    
            return redirect()->route('posts.index')->with('success', 'Post created successfully!');
        }
    }
    public function show(Post $post)
    {
        return view('users.create');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string|max:280',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
