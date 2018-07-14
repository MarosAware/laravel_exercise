@extends('layouts.master')

@section('content')


    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <hr>

    <div class="comments">
        <ul class="list-group">

            @foreach($post->comments as $comment)
                <li class="list-group-item">

                    <strong>
                        {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong>
                    {{ $comment->body }}
                </li>

            @endforeach

        </ul>
    </div>

    {{-- Add a comment --}}

    <hr>
    <h3>Comment this post:</h3>

    <div class="row">
        <div class="col-md-12">

            <form method="post" action="/posts/{{ $post->id }}/comments">

                {{ csrf_field() }}

                {{--If we want other request than get/post--}}
                {{--{{ method_field('PATCH') }}--}}

                <div class="form-group">
                    <label for="body"></label>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="10" placeholder="Your comment here..." required></textarea>
                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Add comment!</button>

                </div>
            </form>
            @include('layouts.errors')
        </div>
    </div>


@endsection