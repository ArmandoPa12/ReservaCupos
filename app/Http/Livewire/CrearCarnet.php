<?php

namespace App\Http\Livewire;

use App\Models\Persona;
use Livewire\Component;

class CrearCarnet extends Component
{
    public $carnet, $nombre, $paterno, $materno, $exp,$estado, $fecha, $relacion;
    public $abreviacion = ['SC','LP','CB','PT' ,'OR' ,'TJ' ,'CH','BN' ,'PD' ,];
    public $civil = ['ESTUDIANTE','SOLTERO','CASADO','VIUDO','DIVORCIADO','CONVIVIENTE','SEPARADO','UNION LIBRE','OTRO',];

    public function render()
    {
        return view('livewire.crear-carnet');
    }

    protected $rules = [
        'nombre' => 'required|string|max:40',
        'paterno' => 'required|max:40',
        'materno' => 'required|max:40',
        'carnet' => 'required|numeric|min:8|unique:persona,ci',
        'exp' => 'required|min:2',
        'fecha' => 'required|before:today|after:1930-01-01',
        'estado' => 'required|min:4',
    ];

    protected $messages = [
        
        'nombre.required' => 'Campo de nombre requerido',
        'nombre.string' => 'El valor no tiene que contener numeros',
        'nombre.max' => 'Loguitud maxima 40',
        'paterno.required' => 'Campo apellido paterno requerido',
        'paterno.max' => 'Longuitud maxima 40',
        'materno.required' => 'Campo apellido materno requerido',
        'materno.max' => 'Longuitud maxima 40',
        'carnet.required' => 'Campo carnet es requerido requerido',
        'carnet.unique' => 'Este carnet ya existe',
        'carnet.numeric' => 'El valor tiene que ser numerico',
        'carnet.min' => 'Longuitud minima de 8 digitos',
        'exp.required' => 'Campo de expendido requerido',
        'fecha.required' => 'Campo de fecha requerido',
        'fecha.after' => 'No puedes usar una fecha antes de: ',
        'fecha.before' => 'No puedes usar la fecha de hoy ni siguientes ',
        'estado.required' => 'El campo de estado civil es requerido',

    ];
    
    public function store(){
        $datos = $this->validate();

        // dd($datos);
        Persona::create([
            'nombre' => $this->nombre,
            'ape_paterno' => $this->paterno,
            'ape_materno' => $this->materno,
            'ci' => $this->carnet,
            'expendido' => $this->exp,
            'est_civil' => $this->estado,
            'nacimiento' => $this->fecha,
        ]);

        return redirect()->route('inscripcion')->with('carnet', $this->carnet);

    }
}
