<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="cake work sweet">
  <meta name="description" content="Need some sweet during your work?">
	<title>Work with Cake</title>

	<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

	@yield('css')

	<!-- Fonts -->
	<link href="{{ asset('/css/fonts.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">Work with Cake</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ url('/search') }}">Search</a></li>
					<li><a href="{{ url('/shops') }}">Shops</a></li>
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
	</nav>

	@yield('content')

	<footer class="section section-primary">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-6">
	        <h1>Footer header</h1>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
	          <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
	          <br>Ut enim ad minim veniam, quis nostrud</p>
	      </div>
	      <div class="col-sm-6">
	        <p class="text-info text-right">
	          <br>
	          <br>
	        </p>
	        <div class="row">
	          <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
	            <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
	            <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
	            <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
	            <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12 hidden-xs text-right">
	            <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
	            <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
	            <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
	            <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</footer>

	<!-- Scripts -->
	<script src="{{ asset('/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>
