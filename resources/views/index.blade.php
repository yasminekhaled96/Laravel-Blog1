

@extends('layouts.app')

@section('content')


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ITI Blog</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/posts">All Posts <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<a href="/posts/create" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create Post</a>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
    </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                <th scope="row">{{ $post['id'] }}</th>
                  <td>{{ $post['Title'] }}</td>
                
                  <td>{{ $post->user ? $post->user->name : 'not exist'}}</td>
                  <td>{{ $post['created_at']->format('d-m-y') }}</td>
                <td>
                <a href="/posts/{{$post->id}}" class="btn btn-primary " >View</a>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-success " >Edit</a>
                
                <form method="POST" action="/posts/{{$post->id}}/delete">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete this post?')" role="button" aria-pressed="true">Delete</a>
                </form>

                </td>
                </tr>
              @endforeach
              </tbody>
            </table>

@endsection