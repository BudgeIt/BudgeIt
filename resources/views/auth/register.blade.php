@extends('layout')
@section('title', 'Register')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>Register</h1>
        <form method="POST" action="/auth/register" id="register">
            {!! csrf_field() !!}
        </form>
    </div>
@endsection
