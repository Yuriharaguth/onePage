@extends('layout.master')

@section('title', 'Editar Servico')

@section('container')

<h2>Editar Topo</h2>

{!! Form::model($servico, ['route' => ['servico.update', $servico->id], 'method' => 'PUT']) !!}

    @include('servico.form')
    
{!! Form::close() !!}

@endsection