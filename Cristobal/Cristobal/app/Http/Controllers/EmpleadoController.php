<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
   
    public function index()
    {
        $datos['empleados']=Empleado::paginate(5);
        return view('empleado.index', $datos);
    }

   
    public function create(){
        return view('empleado.create');
    }

    public function store(Request $request){

        $datosEmpleado = request()->except('_token');
        Empleado::insert($datosEmpleado);
        return redirect('empleado');
    }

    public function show(Empleado $empleado){
        
    }

    public function edit($id){

        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit',compact('empleado'));
    }

    public function update(Request $request, $id){
    }

    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect('/empleado');
    }
}   