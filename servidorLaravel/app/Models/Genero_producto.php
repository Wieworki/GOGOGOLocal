<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero_producto extends Model
{
    use HasFactory;

    protected $table = 'genero_producto';

    protected $fillable = [
        'id',
        'id_producto',
        'id_genero'
    ];
}
