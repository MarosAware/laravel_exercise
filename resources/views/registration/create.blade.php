@extends('layouts.master')


@section('content')

        <h2>Register</h2>

        <form method="post" action="/register">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

            @include('layouts.errors')

        </form>

@endsection
