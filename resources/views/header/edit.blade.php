@extends('layout.master')

@section('title', 'Editar Topo')

@section('container')

<h2>Editar Topo</h2>

{!! Form::model($header, ['route' => ['header.update', $header->id], 'method' => 'PUT']) !!}

    @include('header.form')
    
{!! Form::close() !!}

@endsection