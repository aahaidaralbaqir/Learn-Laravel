@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    <a href="/posts/create" class="btn btn-primary mt-3">New Post</a>
    <hr>
    @if(count($posts) > 0)
        <div class="row">
                @foreach($posts as $x)
                <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                    <h3>{{$x->title}}</h3>
                        <small>Written on : {{$x->created_at}}</small>
                    </div>
                    <div class="card-footer">
                        <p>
                            <a href="/posts/{{$x->id}}" class="btn btn-danger">ReadMore</a>
                        </p>
                    </div>
                </div>
                </div>
                @endforeach
        </div>
    @else
        <p>No Post Found.</p>
    @endif
@endsection