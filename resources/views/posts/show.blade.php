@extends('layouts.master')

@section('content')
<div class="blog-main">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
</div>
<hr>
<div class="comments">
    @foreach($post->comments as $comment)
    <li class="list-group-item">
        <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong>
        {{ $comment->body }}</li>
    @endforeach()
</div>
<hr>
<form action="/posts/{{ $post->id }}/comments" method="POST">
    {{ csrf_field()}}
    <div class="form-group">
        <textarea class="form-control" id="comment" rows="3" placeholder="Your comment here" name="body"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
@include('layouts.errors')

@endsection()