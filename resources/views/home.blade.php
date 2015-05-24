<!DOCTYPE html>
<html>

<head>
  <meta name="keywords" content="cake work sweet">
  <meta name="description" content="Need some sweet during your work?">
  <title>Work with Cake</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="{{ asset('/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

  <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">

  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

  <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

</head>

<body class="home">
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
            @if (Auth::guest())
              <li><a href="{{ url('/auth/login') }}">Login</a></li>
              <li><a href="{{ url('/auth/register') }}">Register</a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                </ul>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
    <div class="background-image-fixed cover-image" style="background-image: url(../public/images/cover.jpg);"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h1 class="text-inverse">Work with Cake</h1>
          <p class="text-inverse">Cause, you need some sweet for work</p>
          {!! Form::open(array('route' => 'search.store')) !!}

            <div class="form-group">
              <div class="input-group">
                <input type="text" name="building" class="form-control" placeholder="ex. Paragon">
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