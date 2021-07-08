@extends('layouts.base')
<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-10">
      <h2 class="text-center mb-5">USUARIOS REGISTRADOS</h2>
      <br><br>
      <a class="btn btn-primary" href="{{url('/form')}}">AGREGAR USUARIO</a>
      <br><br>
      @if('usuarioEliminado')
    <div class="alert alert-success">
        {{ session('usuarioEliminado')}}
    </div>
@endif

      <br>
<table class="table table-bordered table-striped text-center" >
<thead>
<tr>
<th>Nombre</th>
<th>Apeliido</th>
<th>Telefono</th>
<th>Cedula</th>
<th>Direccion</th>
<th>Email</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>
@foreach($users as $user)
<tr>
<td>{{$user->nombre}} </td>
<td>{{$user->apellido}}</td>
<td>{{$user->telefono}}</td>
<td>{{$user->cedula}}</td>
<td>{{$user->direccion}}</td>
<td>{{$user->email}}</td>
<td>
<a href="{{'editform', $user->id}}" class="btn btn-primary mb-1">

<i class="fas fa-pencil-alt"></i>
</a>
<form action="{{ route('delete', $user->id) }}" method="POST">
@csrf @method('DELETE')
<button type="submit" class="btn btn-danger" onclick="return confirm('seguro desea eliminar este usuario..?')" >

<i class="fas fa-trash-alt"></i>

</button>

</form>


</td>

</tr>
@endforeach
</tbody>
</table>
{{$users->links()}}

</div>
   </div>
        </div>