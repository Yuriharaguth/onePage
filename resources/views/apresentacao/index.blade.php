@extends('layout.master')

@section('title', 'Apresentação')

@section('container')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Informações de Apresentação</h1>
		</div>
	</div><!--/.row-->

<table class="table">
	<thead>
		<tr>
            <th>Frase curta</th>
            <th>Frase longa</th>
            <td>Editar</td>
        </tr>
	</thead>


    <tbody>
    @foreach($apresentacao as $ap)
        <tr>
            <td><a href="#">{{$ap->frase_curta}}</a></td>
            <td><a href="#">{{$ap->frase_longa}}</a></td>
            <td><a href="{{ route('apresentacao.edit', $ap->id) }}" ><span class="glyphicon glyphicon-edit"></span></a></td>
    @endforeach
    </tbody>
</table>

@endsection