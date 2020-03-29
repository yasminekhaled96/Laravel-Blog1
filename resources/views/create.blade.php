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
<form method="POST" action="/posts">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="textarea" name="description" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Posted By</label>
    <select class="form-control" name="PostedBy" id="exampleFormControlSelect1">
      <option>yasmine</option>
      <option>mayar</option>
      <option>manar</option>
      <option>marwa</option>
     
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection