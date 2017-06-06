@extends('layout.master')

@section('title', 'Header')

@section('container')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Informações topo do Site</h1>
		</div>
	</div><!--/.row-->

<table class="table">
	<thead>
		<tr>
            <th>Título</th>
            <th>Frase de apresentação</th>
            <td>Editar</td>
        </tr>
	</thead>

    <tbody>
    @foreach($headers as $header)
        <tr>
            <td><a href="#">{{$header->nome_site}}</a></td>
            <td><a href="#">{{$header->frase_apresentacao}}</a></td>
            <td><a href="{{ route('header.edit', $header->id) }}" ><span class="glyphicon glyphicon-edit"></span></a></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection