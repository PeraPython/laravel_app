@extends('layouts.app')

@section('content')
    <div class="container">
        <a href='/posts' class="btn btn-default">Go Back</a>
        <h1>{{$post->title}}</h1>
        <img style="width: 30%" src="/storage/cover_images/{{$post->cover_image}}">
        <div class="container">
            {!!$post->body!!}
        </div>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>    
        @if (!Auth::guest()) 
            @if (Auth::user()->id == $post->user_id)    
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                <form method="POST" action="/posts/{{$post->id}}" style="float: right">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            @endif   
        @endif
    </div>
@endsection