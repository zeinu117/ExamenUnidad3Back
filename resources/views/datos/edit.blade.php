@extends('layout.plantilla')
@section('titulo', 'update')
@section('contenido')
    <h1>Editar Persona </h1>
    <br>
    <form action="{{route('datos.update', $datos)}}" method="post">

        @csrf
        @method('put')
        <label for="apellidoPaterno">Apellido Paterno:</label>
        <input type="text" name="apellidoPaterno" class="form-control" value="{{$datos->apellidoPaterno}}">
        <br>
        <label for="apellidoMaterno">Apellido Materno:</label>
        <input type="text" name="apellidoMaterno" class="form-control" value="{{$datos->apellidoMaterno}}">
        <br>
        <label for="nombre">nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{$datos->nombre}}">
        <br>
        <label for="sexo">sexo:</label>
        <select name="sexo" id="sexo" class="form-control">
            <option value="{{$datos->sexo}}">{{$datos->sexo}}</option>
            <option value="Mujer">Mujer</option>
            <option value="Hombre">Hombre</option>
        </select>
        <br>
        <label for="fechaNacimiento">fecha de Nacimiento:</label>
        <input type="date" name="fechaNacimiento" class="form-control" value="{{$datos->fechaNacimiento}}">
        <br>
        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i>  Actualizar formulario</button>
        <a href="{{route('datos.index')}}" class="btn btn-danger"><i class="fas fa-window-close"></i>  cancelar</a>
    </form>


    @endsection
