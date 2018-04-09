@extends('layouts.main')

@section('content')

<div class="row">
	@foreach($articles as $article)
		<div class="col-sm-4">
			<div class="card">
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

@endsection