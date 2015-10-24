@extends('layout')
@section('title', 'Register')
@section('content')
    <form method="POST" action="/auth/register" id="register">
        {!! csrf_field() !!}
    </form>
@endsection
