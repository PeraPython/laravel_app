@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="/posts" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name='title' id='title' class="form-control" value="" placeholder="Title" required>
        </div>
        <div class="form-group">
                <label for="body">Body</label>
                <textarea type="text" name='body' id='article-ckeditor' class="form-control" value="" placeholder="Body Text" required></textarea>
        </div>
        <div class="form-group">
            <input type="file" name="cover_image" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection