@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <h1>Edit Post</h1>
            <hr>
            {!! Form::open(['action' => ['PostController@update',$post->id],'method' => 'POST']) !!}

                <div class="form-group">
                    {!! Form::label('text', 'Title'); !!}
                    {!! Form::text('title',$post->title,['class' => "form-control","placeholder" => "Example title"]); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('text', 'Body'); !!}
                    {!! Form::textarea('body',$post->body,['class' => "form-control","placeholder" => "Example Body"]); !!}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection