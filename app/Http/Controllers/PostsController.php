<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }


    public function index()
    {
        $posts = Post::latest()->get();

        if (request(['month', 'year'])) {
            $posts = Post::latest()
                ->filter(request(['month', 'year']))
                ->get();
        }



        //the same as:
        //$posts = Post::orderby('created_at', 'desc')->get();




//        $posts = Post::latest();
//
//        if ($month = request('month')) {
//            $posts->whereMonth('created_at', Carbon::parse($month)->month);
//        }
//
//        if ($year = request('year')) {
//            $posts->whereYear('created_at', $year);
//        }
//
//        $posts = $posts->get();





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

        auth()->user()->publish(
            new Post(request()->all())
        );


        //can be also request()->all()
//        Post::create([
//            'title' => request('title'),
//            'body' => request('body'),
//            'user_id' => auth()->id()
//        ]);



        //And then redirect (for example home page)
        return redirect('/');


    }
}
