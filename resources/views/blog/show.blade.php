@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ $blog->title }}</h3>
      <form action="/blog/{{ $blog->id }}" method="post">
        <a href="/blog" class="btn btn-primary">Back</a>
        <a href="/blog/{{ $blog->id }}/edit" class="btn btn-success">Edit</a>
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
    <div class="card-body">
      {{ $blog->subject }}
    </div>
  </div>
@endsection
