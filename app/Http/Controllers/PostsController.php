<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        //the same as:
        //$posts = Post::orderby('created_at', 'desc')->get();

        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //Create a new post using the request data
//        $post = new Post();
//
//        $post->title = request('title');
//        $post->body = request('body');
//
//
//        //Save it to the database
//        $post->save();

        $this->validate(request(), [
            'title' => 'required|min:10',
            'body' => 'required|max:255'
        ]);

        //can be also request()->all()
        Post::create(request(['title', 'body']));



        //And then redirect (for example home page)
        return redirect('/');


    }
}
