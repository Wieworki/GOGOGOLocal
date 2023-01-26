<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_noticia extends Model
{
    use HasFactory;

    protected $table = 'foto_noticia';

    protected $fillable = [
        'id',
        'nombre',
        'ruta',
        'id_noticia',
        'imagen'
    ];

    
}
