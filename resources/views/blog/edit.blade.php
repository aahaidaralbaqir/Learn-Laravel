@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          Edit Blog
        </h3>
      </div>
      <div class="card-body">
        <form action="/blog/{{ $blog->id }}" method="post">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $blog->title }}">
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ $blog->subject }}">
          </div>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="put">

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
@endsection
