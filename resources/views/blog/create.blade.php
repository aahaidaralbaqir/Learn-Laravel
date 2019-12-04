@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          Create Blog
        </h3>
      </div>
      <div class="card-body">
        <form action="/blog" method="post">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Title">
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject">
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
@endsection
