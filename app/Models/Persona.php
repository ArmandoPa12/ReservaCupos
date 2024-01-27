<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'persona';

    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'ape_paterno',
        'ape_materno',
        'ci',
        'expendido',
        'est_civil',
        'nacimiento',
    ];
}
