<?php

namespace App\Http\Controllers;

use App\Models\DatosPersonales;
use Illuminate\Http\Request;

class controlador1 extends Controller
{
    public function index(){

        $datos = DatosPersonales::orderBy('id', 'desc')->paginate();




        return view ('datos.index', compact('datos'));
    }

    public function create(){
        return view ('datos.create');
    }

    public function store(Request $request){
        $datos = new DatosPersonales();

        $datos->apellidoPaterno = $request->apellidoPaterno;
        $datos->apellidoMaterno = $request->apellidoMaterno;
        $datos->nombre = $request->nombre;
        $datos->sexo = $request->sexo;
        $datos->fechaNacimiento = $request->fechaNacimiento;
        $datos->email = $request->email;

        $datos->save();
        return redirect()->route('datos.show', $datos->id);
    }

    public function show(DatosPersonales $datos){

        return view ('datos.show', compact('datos'));
    }
    public function edit(DatosPersonales $datos){
        return view('datos.edit', compact('datos'));

    }
    public function update(Request $request, DatosPersonales $datos){
        $datos->apellidoPaterno = $request->apellidoPaterno;
        $datos->apellidoMaterno = $request->apellidoMaterno;
        $datos->nombre = $request->nombre;
        $datos->sexo = $request->sexo;
        $datos->fechaNacimiento = $request->fechaNacimiento;
        $datos->email = $request->email;

        $datos->save();
        return redirect()->route('datos.show', $datos->id);
    }
}
