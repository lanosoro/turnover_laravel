@extends('layouts.app')
@section('content')
    <a href="/posts" class ="btn btn-primary btn-lg active">Go Back</a>
    <h2>{{$post->title}}</h2>
    
    <div>
        {{$post->body1}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection