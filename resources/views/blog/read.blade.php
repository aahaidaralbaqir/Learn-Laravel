@extends('blog.master.index')

@section('judul_halaman','List of article')

@section('konten')
<table class="table table-bordered">
    <thead>
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Description</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($article as $x)
            <tr>
                <td>1</td>
                <td>{{$x->name}}</td>
                <td>{{$x->description}}</td>
                <td>
                    <a href="/blog/edit/{{$x->id}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <a href="/blog/delete/{{$x->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection