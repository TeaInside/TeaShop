<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.slim.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	@yield('head')
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="/">TeaShop</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="{{ route('menu.how_to_order') }}">{{ trans('menu/index.1') }} <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{ route('menu.price_list') }}">{{ trans('menu/index.2') }}</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{ route('menu.terms_of_service') }}">{{ trans('menu/index.3') }}</a>
		      </li>
		    </ul>
		</div>
		<ul class="navbar-nav mr-auto">
	    	<li>
	    		<a class="nav-link" href="{{ route('login') }}">{{ trans('text.login') }}</a>
	    	</li>
	    	<li>
	    		<a class="nav-link" href="{{ route('register') }}">{{ trans('text.register') }}</a>
	    	</li>
	    </ul>
	</nav>
	@yield('content')
</body>
</html>