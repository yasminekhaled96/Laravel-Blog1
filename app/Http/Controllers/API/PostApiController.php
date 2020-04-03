<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\PostResource;
use  App\Http\Requests\StorePostRequest;
class PostApiController extends Controller
{
    public function index()
    {
       
         return PostResource::collection(Post::all());
    }
    public function show()
    {
         return new PostResource(
             Post::find(request()->post)
         );
    }
    public function store(StorePostRequest $request)
    {
        return new PostResource(
        Post::create([
            'title'=> $request->title,
            'description'=> $request->description,
             
        ])
    );

    }
}
