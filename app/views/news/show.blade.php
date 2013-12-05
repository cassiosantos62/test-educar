@extends('layouts.scaffold')

@section('main')

<h1>Exibir Notícia</h1>

<p>{{ link_to_route('news.index', 'Voltar para todas as notícias') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Titulo</th>
				<th>Descrição</th>
				<th>Categoria</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $news->titulo }}}</td>
					<td>{{{ $news->descricao }}}</td>
					<td>{{{ $news->category->titulo }}}</td>
                    <td>{{ link_to_route('news.edit', 'Editar', array($news->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('news.destroy', $news->id))) }}
                            {{ Form::submit('Deletear', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
