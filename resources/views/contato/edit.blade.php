@extends('layout.master')

@section('title', 'Editar Contato')

@section('container')

<h2>Editar Topo</h2>

{!! Form::model($contato, ['route' => ['contato.update', $contato->id], 'method' => 'PUT']) !!}

    @include('contato.form')
    
{!! Form::close() !!}

@endsection