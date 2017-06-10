@extends('layout.master')

@section('title', 'Editar Servico')

@section('container')

<h2>Editar Topo</h2>

{!! Form::model($servicoImg, ['route' => ['servicosimg.update', $servicoImg->id], 'method' => 'PUT']) !!}

    @include('servicosimg.form')
    
{!! Form::close() !!}


@endsection