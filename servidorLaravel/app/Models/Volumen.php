<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volumen extends Model
{
    use HasFactory;

    protected $table = 'volumen';

    protected $fillable = [
        'id',
        'id_producto',
        'nombre',
        'cantidad'
    ];
}
