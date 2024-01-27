<?php

namespace App\Http\Livewire;

use App\Models\Escuela;
use App\Models\Persona;
use App\Models\Rude;
use App\Models\Sorteo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Busqueda extends Component
{   
    public $carnet, $nombre, $paterno, $materno, $exp,$estado, $fecha, $relacion;

    public $busqueda;
    public function render()
    {
        $valor = session('carnet');

        if(strlen($valor)>0){
            $this->carnet = $valor;
        }

        $persona = Persona::where('ci', $this->carnet)->get();
        if($persona->count() > 0){
            $this->nombre = $persona[0]->nombre;
            $this->exp = $persona[0]->expendido;
            $this->paterno = $persona[0]->ape_paterno;
            $this->materno = $persona[0]->ape_materno;

        }

        // $datos = [];

        // $this->busqueda = $datos;
        
        $this->busqueda = Sorteo::where('ci_tutor', $this->carnet)->get();



    
        

        return view('livewire.busqueda');
    }

    public function borrar($id){
        $registro = Sorteo::find($id);

        $registro->delete();
    }
    public function mandar(){
        return redirect()->route('inscripcion')->with('carnet', $this->carnet);
    }

}
