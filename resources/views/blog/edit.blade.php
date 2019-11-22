@extends('blog.master.index')

@section('judul_halaman','Edit Article')

@section('konten')
<form action="/blog/edit" method="POST">
    {{ csrf_field() }}
    @foreach($article as $x)
    <div class="form-group">
        <label for="name">Title</label>
        <input type="hidden" name="id" class="form-control" value="{{$x->id}}">
        <input type="text" name="title" class="form-control" value="{{$x->name}}">
    </div>
    <div class="form-group">
        <label for="name">Description</label>
        <textarea name="description"  class="form-control">{{$x->description}}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
    @endforeach
</form>
@endsection