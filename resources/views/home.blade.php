@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h1 class="text-inverse">Work with Cake</h1>
      <p class="text-inverse">Cause, you need some sweet for work</p>
      {!! Form::open(array('route' => 'search.store')) !!}

        <div class="form-group">
          <div class="input-group">
            <input type="text" name="place" class="form-control" placeholder="ex. bangkok">
            <input type="hidden" name="name">
            <input type="hidden" name="tel">
            <input type="hidden" name="min-rate">
            <input type="hidden" name="max-rate">
            <input type="hidden" name="description">
            <span class="input-group-btn">
              <button class="btn btn-success" type="submit">Search<br></a>
            </span>
          </div>
        </div>

      {!! Form::close() !!}
      <br>
      <br>
    </div>
  </div>
</div>
@endsection
