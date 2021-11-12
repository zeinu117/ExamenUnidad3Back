@extends('layout.plantilla')
@section('titulo', 'create')
@section('contenido')
    <h1>Nuevos Usuarios </h1>
    <br>
    <form action="{{route('datos.store')}}" method="post">
        @csrf
        <label for="apellidoPaterno">Apellido Paterno:</label>
        <input type="text" name="apellidoPaterno" class="form-control" required>
        <br>
        <label for="apellidoMaterno">Apellido Materno:</label>
        <input type="text" name="apellidoMaterno" class="form-control" required>
        <br>
        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" class="form-control" required>
        <br>
        <label for="sexo">sexo:</label>
        <select name="sexo" id="sexo" class="form-control" required>
            <option value=""></option>
            <option value="Mujer">Mujer</option>
            <option value="Hombre">Hombre</option>
        </select>
        <br>
        <label for="fechaNacimiento">fecha de Nacimiento:</label>
        <input type="date" name="fechaNacimiento" class="form-control" required>
        <br>
        <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i>  Enviar formulario</button>
        <a href="{{route('datos.index')}}" class="btn btn-danger"><i class="fas fa-window-close"></i>  cancelar</a>
    </form>


    @endsection
