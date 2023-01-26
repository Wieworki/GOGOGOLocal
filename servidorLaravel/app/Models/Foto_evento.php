<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_evento extends Model
{
    use HasFactory;

    protected $table = 'foto_evento';

    protected $fillable = [
        'id',
        'nombre',
        'ruta',
        'id_edicion',
        'imagen'
    ];
}
