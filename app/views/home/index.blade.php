@extends('layouts.scaffold')

@section('main')

<h1>Ultimas Notícias</h1>

@if ($news->count())	
	@foreach ($news as $news)

		<h3>{{{ $news->titulo }}}</h3>
		<p>
			{{{ $news->descricao }}}
		</p>

		<em>Postado há: {{{ $news->created_at->diffForHumans() }}}</em>
		
	@endforeach	
@else
	Não existe nenhuma notícia cadastrada.
@endif

@stop
