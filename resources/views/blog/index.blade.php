@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-body">
        <a href="/blog/create" class="btn btn-primary">Create Blog</a>
        <br>
        <br>
        <ul class="list-group">
          @foreach($blogs as $blog)
            <li class="list-group-item"> <a href="/blog/{{ $blog->slug }}"> {{ $blog->title }} </a> | {{ $blog->subject }} || {{ date('F d,Y', strtotime($blog->created_at)) }}</li>
          @endforeach
        </ul>
        {{ $blogs->links() }}
      </div>
    </div>
@endsection
