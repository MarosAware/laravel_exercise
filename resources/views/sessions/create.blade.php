@extends('layouts.master')

@section('content')

    <h2>Sign In</h2>

    <form method="post" action="/login">

        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="name" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Sign In</button>
        </div>

        @include('layouts.errors')
    </form>

@endsection