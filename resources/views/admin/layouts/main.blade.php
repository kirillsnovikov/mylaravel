<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$title}}</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="layout">
		<div class="container">
			<header>
				@yield('header')
			</header>
			<div class="row">
				<div class="col-sm-9">
					@yield('content')
				</div>
				<div class="col-sm-3">
					@yield('sidebar')
				</div>
			</div>
			<footer>
				Laraver project 2018
				@yield('footer')
			</footer>
		</div>
	</div>
</body>
</html>