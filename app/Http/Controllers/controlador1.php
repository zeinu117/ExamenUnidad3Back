<?php

namespace App\Http\Controllers;

use App\Models\DatosPersonales;
use Illuminate\Http\Request;
use Carbon\Carbon;
class controlador1 extends Controller
{
    public function index(){

        $datos = DatosPersonales::orderBy('id', 'desc')->paginate(10);
        return view ('datos.index', compact('datos'));
    }
    public function destroy(DatosPersonales $datos) {
        $datos->delete();
        return redirect()->route('datos.index');
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

        $datos->save();
        return redirect()->route('datos.index');
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

        $datos->save();
        return redirect()->route('datos.index');
    }
}
