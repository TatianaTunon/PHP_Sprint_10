@extends('layoutusuario')

@section('content')
<div class="row">
    <div class="col-md-3 m-4">
        <a href="{{ route('create') }}" class="btn btn-lg btn-primary">New usuari</a>
    </div>
<div class="col-md-12 m-12">
<table class="table table-responsive table-striped">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <th scope="row">Maria</th>
      <th scope="row">Lopez</th>
      <th scope="row">MLopez@gmail</th>
      <th scope="row">123 123 123</th>
      <th scope="row">  
      <a href="{{ route('edit', 1)}}" class="btn btn-warning btn-lg disable">Editar</a></th>
      <th scope="row">
    <form method="POST" action="{{ route('delete')}}"> 
        @csrf <!--token-->
        @method('DELETE') <!--modifica el método del formulario, ya que no admite DELETE-->
      <button type="submit" href="#"  class="btn btn-danger btn-lg disable">Delete</button>
      </form>
   </th>
    </tr>
    </table>
  </tbody>
</div>
@endsection