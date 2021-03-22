@extends('layoutusuario')

@section('content')
<div class="container">
<form method="POST" action="{{ route('edit', 1) }}">
@csrf <!--token-->
@method('PUT') <!--modifica el método del formulario, ya que no admite PUT-->
<h3 class="p-3 mb-2 col-md-6 bg-warning text-white">Edicción usuario</h3>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">Nombre</label>
      <input name=name type="text" class="form-control" id="inputname" placeholder="Nombre" value="{{ old('name') }}">
    </div>
    @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlastname">Apellidos</label>
      <input name=last_name type="text" class="form-control" id="inputlastaname" placeholder="Apellidos" value="{{ old('last_name') }}">
    </div>
    @error('last_name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input name=email type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ old('email') }}">
    </div>
    @error('email')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputphone">Teléfono</label>
      <input name=phone type="text" class="form-control" id="inputPhone" placeholder="Teléfono" value="{{ old('phone') }}">
    </div>
    @error('phone')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
</br>
  <button type="submit" class="btn btn-warning">Editar</button>
</form>
</div>

@endsection