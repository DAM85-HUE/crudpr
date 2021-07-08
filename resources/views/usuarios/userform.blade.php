@extends('layouts.base')
<div class="container" mt-5>
<div class="row justify-content-center" >
<div class="col-md-7 mt-5">

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif




<!--Errroes  -->

@if($errors->any()) 
<div class="alert alert-danger">
<ul>

@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach

</ul>

</div>
 @endif

 <a class="btn btn-warning" href="{{url('/')}}"&laquo volver >Usuarios registrados</a>
<br><br>

<div class="card">

<form action="{{route('save')}}" method="POST">
@csrf
<div class="card-header text-center">AGREGAR USUARIO</div>
<div class="card-body">
<div class="row form-group">
<label for="" class="col-2">Nombre</label>
<input type="text" class="form-control col-md-9" name="nombre">

</div>

<div class="row form-group">
   <label for="" class="col-2">Apellido</label>
      <input type="text" class="form-control col-md-9" name="apellido">
</div>

<div class="row form-group">
    <label for="" class="col-2">Telefono</label>
    <input type="text" class="form-control col-md-9" name="telefono">
</div>  


<div class="row form-group">
   <label for="" class="col-2">Cedula</label>
   <input type="text" class="form-control col-md-9" name="cedula">
</div>

<div class="row form-group">
<label for="" class="col-2">Direccion</label>
<input type="text" class="form-control col-md-9" name="direccion">

</div>

<div class="row form-group">
<label for="" class="col-2">Email</label>
<input type="text" class="form-control col-md-9" name="email">

</div>
<br><br>
<div class="row form-group">
<button type="submit" class="btn btn-success col-md-9 offset-2">Guardar</button>

</div>

</div>

</form>
</div>
</div>
</div>


</div>
