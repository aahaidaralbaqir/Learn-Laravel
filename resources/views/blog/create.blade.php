@extends('blog.master.index')

@section('judul_halaman','New Article')

@section('konten')
<form action="/blog/create" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Description</label>
        <textarea name="description"  class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection