@extends('layout.plantilla')
@section('titulo', 'update')
@section('contenido')
    <h1>Editar Persona </h1>
    <br>
    <form action="{{route('datos.update', $datos)}}" method="post">

        @csrf
        @method('put')
        <label >
            apellidoPaterno:
            <input type="text" name="apellidoPaterno" value="{{$datos->apellidoPaterno}}">
        </label>
        <br>
        <label >
            apellidoMaterno:
            <input type="text" name="apellidoMaterno" value="{{$datos->apellidoMaterno}}">
        </label>
        <br>
        <label >
            nombre:
            <input type="text" name="nombre" value="{{$datos->nombre}}">
        </label>
        <br>
        <label >
            sexo:
            <select name="sexo" id="sexo" >
                <option value="{{$datos->sexo}}">{{$datos->sexo}}</option>
                <option value="M">Mujer</option>
                <option value="H">Hombre</option>
            </select>
        </label>
        <br>
        <label >
            fechaNacimiento:
            <input type="date" name="fechaNacimiento" value="{{$datos->fechaNacimiento}}">
        </label>
        <br>
        <label >
            email:
            <input type="email" name="email" value="{{$datos->email}}">
        </label>
        <br>

        <button type="submit">Actualizar formulario</button>




    </form>


    @endsection
