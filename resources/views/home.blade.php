@extends('layout')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; padding-left: 20;">
  <a class="navbar-brand" href="#">Menú BD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('show')}}">Index usuarios/as</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('create') }}">Nuevo usuario/a</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('edit') }}">Edit usuario/a</a> <!-- se fuerza el id -->
      </li>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #33b5e5; padding-left: 20;">
  <a class="navbar-brand" href="#">Menú Usuario</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/login')}}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('create') }}">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/recuperacio')}}">Recuperación contraseña</a> <!-- se fuerza el id -->
      </li>
  </div>
</nav>



