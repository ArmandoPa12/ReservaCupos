<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rude extends Model
{
    use HasFactory;

    protected $table = 'rude';

    public $timestamps = false;
    protected $fillable = [
        'codigo',
        'nombre',
        'ape_paterno',
        'ape_materno',
        'sexo',
        'departamento',
        'provincia',
        'municipio',
        'comunidad',
        'zona',
        'calle',
        'n_vivienda',
        'celular_con',
        'idioma',
        'etnia',
        ];
}



