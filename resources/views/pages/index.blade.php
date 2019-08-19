@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to Laravel!</h1>
        <p class="lead">This is the laravel application from the "Laravel From Scratch" Youtube series.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </div>
@endsection
