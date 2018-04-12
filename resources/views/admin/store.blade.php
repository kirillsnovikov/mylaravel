@extends('admin.layouts.main')

@section('header')

<h1>
	{{$title}}
</h1>

@endsection


@section('content')

{!! Form::open(['route' => 'film.store']) !!}

	<div class="form-group">
		{!! Form::label('title', 'Заголовок поста') !!}
		{!! Form::text('title', $value = null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('link', 'Ссылка поста') !!}
		{!! Form::text('link', $value = null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('content', 'Текст поста') !!}
		{!! Form::textarea('content', $value = null, ['class'=>'form-control']) !!}
	</div>
	{!! Form::submit('Опубликовать', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection