@extends('layout.master')

@section('title', 'Contato')

@section('container')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Informações topo do Site</h1>
		</div>
	</div><!--/.row-->

<table class="table">
	<thead>
		<tr>
            <th>Titulo</th>
            <th>Frase mensagem</th>
            <th>Email</th>
            <th>Telefone</th>
            <td>Editar</td>
        </tr>
	</thead>

    <tbody>
    @foreach($contato as $cont)
        <tr>
            <td><a href="#">{{$cont->contato_titulo}}</a></td>
            <td><a href="#">{{$cont->contato_mensagem}}</a></td>
            <td><a href="#">{{$cont->contato_email}}</a></td>
            <td><a href="#">{{$cont->contato_tel}}</a></td>
            <td><a href="{{ route('contato.edit', $cont->id) }}" ><span class="glyphicon glyphicon-edit"></span></a></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection