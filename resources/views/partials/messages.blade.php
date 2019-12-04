@if(count($errors) > 0)
    @foreach($errors->all() as $error)
      <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif


@if(Session::has('success'))
  <div class="alert alert-success">
    {{ Session::get('success') }}
  </div>
@endif

@if(Session::has('error'))
  <div class="alert alert-success">
    {{ Session::get('error') }}
  </div>
@endif
