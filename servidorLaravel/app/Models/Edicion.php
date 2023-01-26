<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edicion extends Model
{
    use HasFactory;

    protected $table = 'edicion';

    protected $fillable = [
        'id',
        'nombre',
        'fecha',
        'id_evento'
    ];
}
