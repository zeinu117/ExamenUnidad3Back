@extends('layout.plantilla')
@section('titulo', 'inicio')
@section('contenido')
    <h1 class="text-center">Bienvenidos a la pagina principal datos personales</h1>
    <li class="list-group-item">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">fecha de Nacimiento</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Agregar</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Actualizar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $dato)
                <tr>
                    <th scope="row">{{$dato->id}}</th>
                    <th>{{$dato->apellidoPaterno}}</th>
                    <th>{{$dato->apellidoMaterno}}</th>
                    <th>{{$dato->nombre}}</th>
                    <th>{{$dato->fechaNacimiento}}</th>
                    <th>{{$dato->sexo}}</th>
                    <th><?php
                        $fecha_nacimiento = new DateTime($dato['fechaNacimiento']);
                        $hoy = new DateTime();
                        $edad = $hoy->diff($fecha_nacimiento);
                        echo $edad->y;
                        ?>
                    </th>
                    <th>
                    <a href="{{route('datos.create', $dato)}}"><button class="btn btn-primary"><i class="fas fa-user-plus"></i></button></a>
                    </th>
                    <form action="{{route('datos.destroy', $dato)}}" method="POST">
                        @csrf
                        @method('delete')
                        <th><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></th>
                    </form>
                    <th> <a href="{{route('datos.edit',$dato->id)}}" class="btn btn-warning" role="button"><i class="fas fa-edit"></i></a> </th>

                </tr>
                @endforeach
            </tbody>
        </table>
    </li>



{{$datos->links()}}


    @endsection
