@extends('layout')
@section('title', 'Register')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>Register</h1>

        <form method="POST" action="/auth/register" id="register">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                       value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                       value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                       placeholder="Confirm Password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="submit">Register</button>
            </div>
        </form>
    </div>
@endsection
