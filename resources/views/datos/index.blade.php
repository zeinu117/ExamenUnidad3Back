@extends('layout.plantilla')
@section('titulo', 'index')
@section('contenido')
    <h1>Bienvenidos a la pagina principal datos personales</h1>
    <a href="{{route('datos.create')}}">Crear curso</a>
    <ul>
        @foreach ($datos as $dato)
            <li><a href="{{route('datos.show', $dato->id)}}">{{$dato->nombre}}</a></li>
        @endforeach
    </ul>

    {{ $datos->links() }}


    @endsection
