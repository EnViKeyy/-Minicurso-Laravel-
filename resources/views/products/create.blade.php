@extends('layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content_header')
    @include('helpers.flash-message')
    <h1>Cadastrar novo produto</h1>
@stop

@section('content')
    @include('products._form', [
        'form' => $form
    ])
@stop
