@extends('layout.plantilla')
@section('titulo', 'Datos ' . $datos->nombre)
@section('contenido')
    <h1>Bienvenido {{$datos->nombre}}</h1>
    <a href="{{route('datos.index')}}">Volver a usuarios</a>
    <br>
    <a href="{{route('datos.edit', $datos)}}">Editar curso</a>
    <p></p>
    <p><strong>apellidoPaterno: </strong>{{$datos->apellidoPaterno}}</p>
    <p><strong>apellidoMaterno: </strong>{{$datos->apellidoMaterno}}</p>
    <p><strong>Sexo: </strong>{{$datos->sexo}}</p>
    <p><strong>Fecha de nacimiento:</strong>{{$datos->fechaNacimiento}}</p>
    <p><strong>email: </strong>{{$datos->email}}</p>



    @endsection
