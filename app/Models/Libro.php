<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Libro extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'libros';

    // Campos que se pueden llenar 
    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'anio_publicacion'
    ];
}

