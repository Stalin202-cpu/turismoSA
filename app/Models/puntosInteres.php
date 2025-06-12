<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class puntosInteres extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'descripcion',
        'categoria',
        'imagen',
        'latitud',
        'longitud'
    ];
}
