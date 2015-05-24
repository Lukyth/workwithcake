<!DOCTYPE html>
<html>

<head>
  <meta name="keywords" content="cake work sweet">
  <meta name="description" content="Need some sweet during your work?">
  <title>Work with Cake</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
  rel="stylesheet" type="text/css">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet">

  <link href="{{ asset('/css/home.css') }}" rel="stylesheet">

</head>

<body>
  <div class="cover">
    <div class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}"><span>Work with Cake</span><br></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="{{ url('/search') }}">Search<br></a>
            </li>
            <li class="active">
              <a href="{{ url('/shops') }}">Shops<br></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="background-image-fixed cover-image" style="background-image: url(https://unsplash.imgix.net/photo-1418065460487-3e41a6c84dc5?q=75&amp;fm=jpg&amp;s=127f3a3ccf4356b7f79594e05f6c840e);"></div>
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
  </div>
</body>

</html>