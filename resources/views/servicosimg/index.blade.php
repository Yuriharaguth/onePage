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
            <th>Titulo</th>
            <th>Descricao Servico</th>
            <th>Editar</th>
        </tr>
	</thead>

    <tbody>
    @foreach($servicoImg as $ser)
        <tr>
            <td><a href="#">{{$ser->servicoimg_titulo}}</a></td>
            <td><a href="#">{{$ser->servicoimg_descricao}}</a></td>
            <td><a href="{{ route('servicosimg.edit', $ser->id) }}" > <span class="glyphicon glyphicon-edit"></span></a></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection