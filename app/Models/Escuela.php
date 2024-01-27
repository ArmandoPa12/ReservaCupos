<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    use HasFactory;

    protected $table = 'escuela';

    public $timestamps = false;
    protected $fillable = [
        'codigo',
        'nombre',
        'departamento',
        'provincia',
        'ubicacion',
    ];
}
