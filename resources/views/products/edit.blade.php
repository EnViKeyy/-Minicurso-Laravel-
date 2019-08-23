@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content_header')
    @include('helpers.flash-message')
    <h1>Editar produto</h1>
@stop

@section('content')
    @include('products._form', [
        'form' => $form
    ])
@stop
