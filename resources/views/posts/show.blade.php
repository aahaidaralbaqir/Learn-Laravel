@extends('layouts.app')

@section('content')
    <h1>Detail Post</h1>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <a href="/posts" class="btn btn-primary">Go Back</a>
                <h3>{{$post->title}}</h3>
                    <p>
                        {{$post->body}}
                    </p>
                    <small>Written on : {{$post->created_at}}</small>
                </div>
                <div class="card-footer">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                    {!!Form::open(['action' => ['PostController@destroy',$post->id],'method' => 'POST','class' => 'pull-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>

@endsection