@extends('errors::illustrated-layout')

@section('code', '404')
@section('title', __('Página no encontrada'))

@section('image')


<div id="apartado-derecho"  class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    <h2>No hemos encontrado la página que buscas</h2>
    <img src="{!! asset('error404.jpg') !!}">
</div>

@endsection

@section('message', __('Volver al menu es fácil; dale al botón'))

