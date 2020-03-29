<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('index',[
           'posts' => $posts,
        ]);
    }

    public function show()
    {   $request=request();
        $postid= $request->post;

        $post=Post::find($postid);
        
        return view('show',[
            'post'=>$post,
        ]);
    }
    public function create()
    {
        return view('create');
    }
    public function store()
    {
        
        $request=request();
        Post::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'PostedBy' => $request->PostedBy,
            
        ]);
        return redirect('/posts');
    }
}
