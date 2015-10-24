@extends('layout')
@section('title', 'Log In')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>Log In</h1>
        <form method="POST" action="/auth/login" id="log-in">
            {!! csrf_field() !!}
        </form>
    </div>
@endsection
