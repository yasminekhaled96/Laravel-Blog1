@extends('layouts.app')
@section('content')

<div class="card">
  <h5 class="card-header">Post info</h5>
  <div class="card-body">
    <h5 class="card-title">Title:- {{$post['Title']}}</h5>
    <p class="card-text">Description:{{$post['description']}}-</p>
    
  </div>
</div>

<div class="card">
  <h5 class="card-header">Post Creator info</h5>
  <div class="card-body">
    <h5 class="card-title">Name:- {{$post['PostedBy']}}</h5>
    <h5 class="card-title">Email:-</h5>
    <h5 class="card-title">Created At:- {{$post['created_at']}}</h5>
    
  </div>
</div>
@endsection