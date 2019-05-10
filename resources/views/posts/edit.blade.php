@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name='title' id='title' class="form-control" value="{{$post->title}}" placeholder="Title" required>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea type="text" name='body' id='article-ckeditor' class="form-control" placeholder="Body Text" required>{{$post->body}}</textarea>
        </div>
        <div class="form-group">
            <input type="file" name="cover_image" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection