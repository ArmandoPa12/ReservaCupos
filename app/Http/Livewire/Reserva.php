<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;

class Reserva extends Component
{
    public $texto, $personas;
    public function render()
    {
        $this->personas = Persona::all();
        return view('livewire.reserva');
    }
}
