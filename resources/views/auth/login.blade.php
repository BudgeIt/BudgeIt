@extends('layout')
@section('title', 'Log In')
@section('content')
    <form method="POST" action="/auth/login" id="log-in">
        {!! csrf_field() !!}
    </form>
@endsection
