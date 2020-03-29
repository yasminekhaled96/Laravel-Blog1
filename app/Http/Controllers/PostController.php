<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

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
    {   $users=User::all();
        return view('create',[
            'users'=>$users
        ]);
    }
    public function store()
    {
        
        $request=request();
        Post::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'user_id' => $request->user_id,
            
        ]);
        return redirect('/posts');
    }

    public function destroy()
    {
        $request=request();
        $postid= $request->post;
        Post::find($postid)->delete();
        return redirect('/posts');
    }
}
