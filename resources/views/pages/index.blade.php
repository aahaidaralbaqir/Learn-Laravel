@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center mt-4">
        <h1>Welcome To Laravel!</h1>
        <p>This is laravel application from the "Laravel From Stratch" Youtube series</p>
        <p>
            <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
            <a href="/login" class="btn btn-success btn-lg" role="button">Register</a>
        </p>
    </div>
@endsection