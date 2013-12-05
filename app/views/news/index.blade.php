@extends('layouts.scaffold')

@section('main')

<h1>Todas Notícias</h1>

<p>{{ link_to_route('news.create', 'Adicionar nova notícia') }}</p>

@if ($news->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Descricao</th>
				<th>Categoria</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($news as $news)
				<tr>
					<td>{{{ $news->titulo }}}</td>
					<td>{{{ $news->descricao }}}</td>
					<td>{{{ $news->category->titulo }}}</td>
                    <td>{{ link_to_route('news.edit', 'Editar', array($news->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('news.destroy', $news->id))) }}
                            {{ Form::submit('Deletar', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	Não existe nenhuma notícia cadastrada.
@endif

@stop
