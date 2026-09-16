<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; //Para generar registros falsos o de prueba en la DB de forma rapida.
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //definir los campos de la tabla
    protected $table = 'cliente'; //protected para definir exactamente el nombre de la tabla

    protected $primaryKey = 'id_cliente'; //Se debe definir el nombre de la llave primaria porque lo toma generico solo como 'id'

    protected $fillable = //protected para definir exactamente los campos de la tabla de la BD.
    [
        'nombre',
        'apellido'
    ];

    public $timestamps = false; //Para que no asume que tiene tablas llamadas created_at y updated_at
}
