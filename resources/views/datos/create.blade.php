@extends('layout.plantilla')
@section('titulo', 'create')
@section('contenido')
    <h1>Nuevos Usuarios </h1>
    <br>
    <form action="{{route('datos.store')}}" method="post">

        @csrf

        <label >
            apellidoPaterno:
            <input type="text" name="apellidoPaterno">
        </label>
        <br>
        <label >
            apellidoMaterno:
            <input type="text" name="apellidoMaterno">
        </label>
        <br>
        <label >
            nombre:
            <input type="text" name="nombre">
        </label>
        <br>
        <label >
            sexo:
            <select name="sexo" id="sexo" >
                <option value="M">Mujer</option>
                <option value="H">Hombre</option>
            </select>
        </label>
        <br>
        <label >
            fechaNacimiento:
            <input type="date" name="fechaNacimiento">
        </label>
        <br>
        <label >
            email:
            <input type="email" name="email">
        </label>
        <br>

        <button type="submit">Enviar formulario</button>




    </form>


    @endsection
