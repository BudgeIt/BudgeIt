@extends('layout')
@section('title', 'Log In')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>Log In</h1>

        <form method="POST" action="/auth/login" id="log-in">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email" name="email"
                       value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" id="password">
            </div>

            <div class="checkbox">
                <label for="remember">
                    <input type="checkbox" name="remember" id="remember"> Remember Me
                </label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="submit">Log In</button>
            </div>
        </form>
    </div>
@endsection
