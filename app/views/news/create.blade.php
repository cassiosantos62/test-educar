@extends('layouts.scaffold')

@section('main')

<h1>Adicionar nova Notícia</h1>

{{ Form::open(array('route' => 'news.store')) }}
	<ul>
        <li>
            {{ Form::label('titulo', 'Titulo:') }}
            {{ Form::text('titulo') }}
        </li>

        <li>
            {{ Form::label('descricao', 'Descricao:') }}
            {{ Form::textarea('descricao') }}
        </li>

        <li>
            {{ Form::label('categoria', 'Categoria:') }}
            {{ Form::select('category_id', $categories) }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


