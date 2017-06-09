@extends('layout.master')

@section('title', 'Servico')

@section('container')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Serviços</h1>
		</div>
	</div><!--/.row-->

<table class="table">
	<thead>
		<tr>
            <th>Nome</th>
            <th>Descricao Servico</th>
            <th>Icon</th>
            <th>Editar</th>
        </tr>
	</thead>

    <tbody>
    @foreach($servicos as $servico)
        <tr>
            <td><a href="#">{{$servico->nome_servico}}</a></td>
            <td><a href="#">{{$servico->descricao_servico}}</a></td>
            <td><a href="#">{{$servico->servico_icon}}</a></td>
            <td><a href="{{ route('servico.edit', $servico->id) }}" > <span class="glyphicon glyphicon-edit"></span></a></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection