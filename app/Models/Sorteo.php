<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteo extends Model
{
    use HasFactory;
    protected $table = 'sorteo';

    public $timestamps = false;
    protected $fillable = [
        'codigo_escuela',
        'nombre_escu',
        'grado',
        'curso',
        'ci_tutor',
        'cod_estu',
        'nombre_estu',
        'ganador',
        'relacion'
    ];   
}
