@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-body">
    <h1>Halaman Subscribe</h1>
    <form action="/mailist" method="post">
      <input type="checkbox"
        @if(Auth::user()->mailist == 1)
          checked
        @endif
      name="mailist"
      value="subscibed"
      > Subscribe mailist
      {{ csrf_field() }}
      <br>
      <input type="submit" name="submit" value="Subscribe"
       class="btn btn-primary"
       >
    </form>
  </div>
</div>
@endsection
