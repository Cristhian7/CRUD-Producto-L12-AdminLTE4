<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; 

class ClienteController extends Controller
{
    //Muestra el formulario vacio
    public function create()
    {
        return view('clientes.create');
    }

    //Procesa y guardar los datos en la base de datos de esa tabla en especifico
    public function store(Request $request)
    {
        //Validar campos
        $request->validate(
            [
                'nombre' => 'required|string|max:50',
                'apellido' => 'required|string|max:50',
            ]);

            //Guarda todos los datos de forma masiva en la base de datos $fillable del modelo
            Cliente::create($request->all());

            //Redirecciona al formulario con mensaje de exito
            return redirect()->route('clientes.create')->with('Exito','Cliente registrado correctamente!');      

    }
}
