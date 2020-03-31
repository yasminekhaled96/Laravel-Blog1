<?php

namespace App\Http\Controllers;
use  App\Http\Requests\StorePostRequest;
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
    public function store(StorePostRequest $request)
    {
       
        Post::create([
            'title'=> $request->title,
            'description'=> $request->description,
            
            
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

    public function edit()
{    $users=User::all();
    $request=request();
        $postid= $request->post;

        $post=Post::find($postid);
        
        return view('edit',[
            'post'=>$post,
            'users'=>$users,
        ]);
}

public function update(StorePostRequest $request)
{   
    $users=User::all();
    $postid= $request->post;
    $post=Post::find($postid);
    
       $post->Title = $request->title;
        $post->description = $request->description;
        $post->user_id= $request->user_id;
        $post->save();
    return redirect('/posts');
}
}
