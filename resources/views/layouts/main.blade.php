@extends('layouts.site')

@section('header')
<ul class="nav">
	<li class="nav-item">
		<a class="nav-link active" href="#">
			Active
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">
			Link
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">
			Link
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link disabled" href="#">
			Disabled
		</a>
	</li>
</ul>
<h1>
	Hello, this my first Laravel project in {{$message}}
</h1>
<p class="text-info">
	{{$text}}
</p>
@endsection('header')

@section('sidebar')
<div class="list-group">
	<a href="#" class="list-group-item list-group-item-action">
		Politics
		<span class="badge badge-primary">15</span>
	</a>
	<a href="#" class="list-group-item list-group-item-action">
		Business
		<span class="badge badge-primary">48</span>
	</a>
	<a href="#" class="list-group-item list-group-item-action">
		Auto
		<span class="badge badge-primary">52</span>
	</a>
	<a href="#" class="list-group-item list-group-item-action">
		Science
		<span class="badge badge-primary">10</span>
	</a>
	<a href="#" class="list-group-item list-group-item-action">
		Fashion
		<span class="badge badge-primary">4</span>
	</a>
	
</div>
@endsection('sidebar')