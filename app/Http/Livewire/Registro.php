<?php

namespace App\Http\Livewire;

use App\Models\Sorteo;
use Livewire\Component;

class Registro extends Component
{
    public function render()
    {
        return view('livewire.registro');
    }
    public function sortear(){
        $participantes = Sorteo::all();

        foreach ($participantes as $participante) {
            $resultadoSorteo = rand(-1, 1);

            $participante->update(['ganador' => $resultadoSorteo]);
        }

        return redirect()->route('inicio');
    }
}
