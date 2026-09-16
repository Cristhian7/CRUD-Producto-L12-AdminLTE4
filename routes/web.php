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


