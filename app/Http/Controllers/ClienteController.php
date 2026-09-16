<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; 

class ClienteController extends Controller
{
    //CREATE
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

    //READ clientes------------------------------------------------------
    public function VistaCliente()
    {
        //Crear variable donde se van a guardar todos los datos del cliente y que los ordene por desc
        //Los datos estan en el modelo por eso se coloca Cliente 
        $clientes = Cliente::orderBy('id_cliente', 'desc')->get();

        //Que muestre la vista con los datos
        return view('clientes.VistaCliente', compact('clientes'));
    }

    //UPDATE cliente-----------------------------------------------------
    //Buscar el cliente por medio de id 
    public function UpdateCliente($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.UpdateCliente', compact('cliente'));
    }

    //Procesa y actualiza los datos de la base de datos
    public function update(Request $request, $id)
    {
        //Valida los campos, los campos que tiene la tabla cliente
        $request->validate(
        [
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',

        ]);
        
        
        //Buscar los datos y actualizar
        $cliente = Cliente::findOrFail($id);
        $cliente->update()->route($request->only(['nombre', 'apellido']));

        //Redegirir a la pagina
        return redirect()->route('cliente.Vistacliente')->with('exito', 'Cliente actualizado correctamente!');

   }
}
