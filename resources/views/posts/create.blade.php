@extends('layouts.master')



@section('content')
<form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="body">Content</label>
        <textarea class="form-control" id="body" rows="3" name="body"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Publish</button>
</form>
@include('layouts.errors')
@endsection()