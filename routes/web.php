<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('dashboard');
    //return redirect()->route('clientes.create'); //Que muestre el formulario para llenar crear
});

//Rutas del cliente
//Metodo get(Obtener/Pedir) se usa para solicitar o leer informacion del servidor.
Route::get('/clientes/nuevo', [ClienteController::class, 'create'])->name('clientes.create'); //Ruta para crear
//Metodo post(Enviar/Guardar) se usa para enviar datos al servidor y guardarlos en la base de datos 
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store'); //Ruta para almacenar

//Ruta para ver listado de Clientes
Route::get('/clientes', [ClienteController::class, 'VistaCliente'])->name('clientes.index');

//Rutas para actualizar cliente
//Ruta para mostrar el formulario con los campos del id del cliente
Route::get('/clientes/{id}/editar', [ClienteController::class, 'UpdateCliente'])->name('clientes.UpdateCliente');
//Ruta para actualizar el cliente en la base de datos
Route::put('/clientes/{id}', [ClienteController::class, 'upate'])->name('clientes.UpdateCliente');
