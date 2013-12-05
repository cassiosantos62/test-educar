@extends('layouts.scaffold')

@section('main')

<h1>Exibir Categoria</h1>

<p>{{ link_to_route('categories.index', 'Voltar para todas as categorias') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Titulo</th>
				<th>Descrição</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $category->titulo }}}</td>
					<td>{{{ $category->descricao }}}</td>
                    <td>{{ link_to_route('categories.edit', 'Editar', array($category->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('categories.destroy', $category->id))) }}
                            {{ Form::submit('Deletar', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
