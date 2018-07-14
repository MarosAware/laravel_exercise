@extends('layouts.master')

@section('content')

    <h1>Create a post.</h1>
    <hr>

    <form method="post" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title"  class="form-control" id="title" aria-describedby="titleHelp">
        </div>

        <div class="form-group">
            <label for="body">Content</label>
            <textarea id="body" name="body" class="form-control" id="content" rows="10"></textarea>
        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Publish</button>

        </div>

        @include('layouts.errors')
    </form>



@endsection