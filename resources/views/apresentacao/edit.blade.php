@extends('layout.master')

@section('title', 'Editar Apresentação')

@section('container')

<h2>Editar Apresentação</h2>

{!! Form::model($ap, ['route' => ['apresentacao.update', $ap->id], 'method' => 'PUT']) !!}

    @include('apresentacao.form')
    
{!! Form::close() !!}

@endsection