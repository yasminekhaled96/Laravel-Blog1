@extends('layouts.app')
@section('content')

<div class="card">
  <h5 class="card-header">Post info</h5>
  <div class="card-body">
    <h5 class="card-title">Title:- {{$post['Title']}}</h5>
    <h5 class="card-text">Description:- {{$post['description']}}</h5>
    
  </div>
</div>

<div class="card">
  <h5 class="card-header">Post Creator info</h5>
  <div class="card-body">
    <h5 class="card-title">Name:- {{$post->user->name}}</h5>
    <h5 class="card-title">Email:- {{$post->user->email}}</h5>
    <h5 class="card-title">Created At:- {{$post['created_at']->format('d-m-y')}}</h5>
    
  </div>
</div>
@endsection