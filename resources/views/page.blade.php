@extends('layouts.site')

@section('content')
<div class="container">
	<h1>Hello, this my first Laravel project in {{$message}}</h1>
		<p class="text-info">{{$text}}</p>
		
		<div class="row">
			@foreach($articles as $article)
				<div class="col-md-4">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="http://www.zastavki.com/pictures/286x180/2015/Backgrounds_Game_console_Nintendo__blue_background_106911_32.png" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title">{{$article->title}}</h5>
							<p class="card-text">{!!$article->desc!!}</p>
							<a href="#" class="btn btn-primary">Подробнее</a>
							</div>
						</div>
				</div>
			@endforeach
		</div>
	<footer>Laraver project 2018</footer>
</div>
@endsection