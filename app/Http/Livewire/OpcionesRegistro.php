<?php

namespace App\Http\Livewire;

use App\Models\Escuela;
use App\Models\Persona;
use App\Models\Rude;
use App\Models\Sorteo;
use Illuminate\Http\Client\Request;
use Livewire\Component;

class OpcionesRegistro extends Component
{
    public $carnet, $nombre, $paterno, $materno, $exp,$estado, $fecha, $relacion;
    public $find = false;
    public $example, $cant , $estudiante , $estCarnet, $carnetId, $iguales=false;

    // escuela
    public $depSeleccion, $proSeleccion, $escuelaSelecion, $nombreEscuela, $idEscuela;
    // escoger
    public $tipoReg;
    // estudiante
    public $estuId, $rude, $nombreEst, $paternoEst, $maternoEst, $sexoEst, $proSeleccionEst, $depSeleccionEst, $municipioEst ,$comunidadEst, $zonaEst, $calleEst, $viviendaEst,$etniaEst,$idiomaEst,$celularEst;
    

    public $carnetEst, $nombreCaEst, $paternoCaEst, $maternoCaEst, $expEst,$estadoCaEst, $fechaCaEst;
    public $etnias_bolivia = [
        'Quechua',
        'Aymara',
        'Guaraní',
        'Chiquitano',
        'Moxeño',
        'Chiman',
        'Yuracaré',
        'Ayoreo',
        'Tsimané',
        'Weenhayek',
        'Sirionó',
        'Movima',
        'Trinitario',
        'Joaquiniano',
        'Chácobo',
        'Araona',
        'Tacana',
        'Mojeño',
        'Uru-Chipaya',
        'Afroboliviano',
        'Canichana',
        'Itonama',
        'Leco',
        'Mapudungun',
        'Mauri',
        'Mosi',
        'Tacana',
        'Tapiete',
        'Toromona',
        'Uru',
        'Yaminahua',
        'Yuki',
        'Yuracaré',
        'Zamuco',
    ];
    public $abreviacion = ['SC','LP','CB','PT' ,'OR' ,'TJ' ,'CH','BN' ,'PD' ,];
    public $civil = ['ESTUDIANTE','SOLTERO','CASADO','VIUDO','DIVORCIADO','CONVIVIENTE','SEPARADO','UNION LIBRE','OTRO',];
    public $LaPaz = ['Murillo', 'Omasuyos', 'Sud Yungas', 'Nor Yungas', 'Manco Kapac', 'Los Andes', 'Ingavi', 'Franz Tamayo', 'Bautista Saavedra'];
    public $Cochabamba = ['Cercado', 'Arani', 'Arque', 'Ayopaya', 'Campero', 'Capinota', 'Chapare', 'Esteban Arce', 'Germán Jordán', 'Mizque', 'Punata', 'Quillacollo', 'Tapacarí', 'Tiraque'];
    public $SantaCruz = ['Andrés Ibáñez', 'Chiquitos', 'Cordillera', 'Florida', 'Ichilo', 'Ñuflo de Chávez', 'Sara', 'Vallegrande', 'Warnes'];
    public $Potosi = ['Chayanta', 'Tomás Frías', 'Alonzo de Ibáñez', 'Antonio Quijarro', 'Nor Chichas', 'Sud Chichas', 'José María Linares', 'Modesto Omiste', 'Nor Lípez', 'Sur Lípez', 'Enrique Baldivieso'];
    public $Oruro = ['Cercado', 'Eduardo Abaroa', 'Carangas', 'Ladislao Cabrera', 'Litoral', 'Poopó', 'Sajama', 'San Pedro de Totora', 'Sebastián Pagador', 'Saucarí'];
    public $Tarija = ['Aniceto Arce', 'Burnet O’Connor', 'Cercado', 'Eustaquio Méndez', 'Gran Chaco', 'José María Avilés', 'O’Connor', 'Padcaya', 'El Puente'];
    public $Chuquisaca = ['Oropeza', 'Belisario Boeto', 'Luis Calvo', 'Jaime Zudáñez', 'Nor Cinti', 'Sud Cinti', 'Hernando Siles', 'Tomina', 'Yamparáez'];
    public $Beni = ['Cercado', 'Iténez', 'José Ballivián', 'Mamoré', 'Moxos', 'Vaca Díez', 'Yacuma'];
    public $Pando = ['Abuná', 'Federico Román', 'Manuripi', 'Nicolás Suárez'];
    public $departamentos = [
        'La Paz', 'Cochabamba', 'Santa Cruz', 'Potosí', 'Oruro', 'Tarija', 'Chuquisaca', 'Beni', 'Pando'
    ];
    public $step = 1, $tipoCurso,$curso;

    public $grado;
    public $cursosPrimaria = ["Primero", "Segundo", "Tercero", "Cuarto", "Quinto", "Sexto"];
    public $cursosSecundaria = ["Primero", "Segundo", "Tercero", "Cuarto", "Quinto","Sexto"];

    public function render()
    {


        $valor = session('carnet');

        if(strlen($valor)>0){
            $this->carnet = $valor;
        }

        $this->example = Persona::where('ci', $this->carnet)->get();

        $this->estudiante = Rude::where('codigo', $this->rude)->get();
        
        $this->escuelaSelecion = Escuela::where('departamento',$this->depSeleccion)->
                                          where('provincia', $this->proSeleccion)->
                                          where('nombre', 'like', "%$this->nombreEscuela%")->take(5)->get();
        


        // estudiante
        if($this->estudiante->count() > 0){
            $this->estuId = true;
            $this->rude = $this->estudiante[0]->codigo; 
            $this->nombreEst = $this->estudiante[0]->nombre  ; 
            $this->paternoEst= $this->estudiante[0]->ape_paterno  ;
            $this->maternoEst= $this->estudiante[0]->ape_materno  ; 
            $this->sexoEst= $this->estudiante[0]->sexo; 
            $this->proSeleccionEst= $this->estudiante[0]->provincia  ; 
            $this->depSeleccionEst= $this->estudiante[0]->departamento  ; 
            $this->municipioEst= $this->estudiante[0]->municipio  ;
            $this->comunidadEst= $this->estudiante[0]->comunidad  ; 
            $this->zonaEst= $this->estudiante[0]->zona  ; 
            $this->calleEst= $this->estudiante[0]->calle  ; 
            $this->celularEst= $this->estudiante[0]->celular_con  ; 
            $this->viviendaEst= $this->estudiante[0]->n_vivienda  ;
            $this->etniaEst= $this->estudiante[0]->etnia  ;
            $this->idiomaEst= $this->estudiante[0]->idioma  ;
        }else{
            $this->estuId = false;
        }

        // carnet estudiante
        $this->estCarnet = Persona::where('ci', $this->carnetEst)->get();
        if($this->estCarnet->count() > 0){
            $this->carnetId = true;
            $this->nombreCaEst = $this->estCarnet[0]->nombre;
            $this->expEst = $this->estCarnet[0]->expendido;
            $this->paternoCaEst = $this->estCarnet[0]->ape_paterno;
            $this->maternoCaEst = $this->estCarnet[0]->ape_materno;
            $this->estadoCaEst = $this->estCarnet[0]->est_civil;
            $this->fechaCaEst = $this->estCarnet[0]->nacimiento;
        }else{
            $this->carnetId = false;    
        }

        if($this->estCarnet->count() == 0){
            $this->carnetId = '';
            $this->nombreCaEst = '';
            $this->expEst = '';
            $this->paternoCaEst ='';
            $this->maternoCaEst = '';
            $this->estadoCaEst = '';
            $this->fechaCaEst = '';
        }

        // tutor
        if($this->example->count() > 0){
            $this->find = true;
            $this->nombre = $this->example[0]->nombre;
            $this->exp = $this->example[0]->expendido;
            $this->paterno = $this->example[0]->ape_paterno;
            $this->materno = $this->example[0]->ape_materno;
            $this->estado = $this->example[0]->est_civil;
            $this->fecha = $this->example[0]->nacimiento;
        }else{
            $this->find = false;    
        }

        if(strlen($this->carnet) == 0){
            $this->nombre = '';
            $this->exp ='';
            $this->paterno = '';
            $this->materno = '';
            $this->estado ='';
            $this->fecha = '';
        }

        if($this->carnet == $this->carnetEst){
            $this->iguales = true;
        }else{
            $this->iguales = false;
        }

        return view('livewire.opciones-registro');
    }

    public function multiClick(){
        
        // if(!$this->find){
        //     $this->storeCarnet();
        // }


        $this->nextStep();
        
    }
    // 1rude
    // 2ci
    public function store(){
        if($this->tipoReg == 1){
            Sorteo::create([
                'codigo_escuela'=>$this->idEscuela,
                'nombre_escu' => $this->nombreEscuela,
                'grado'=>$this->grado,
                'curso'=>$this->tipoCurso,
                'ci_tutor'=>$this->carnet,   
                'nombre_estu'=>$this->nombreEst,       
                'relacion'=>$this->relacion,
                'cod_estu'=>$this->rude,
            ]);
        }else{
            Sorteo::create([
                'codigo_escuela'=>$this->idEscuela,
                'nombre_escu' => $this->nombreEscuela,
                'grado'=>$this->grado,
                'curso'=>$this->tipoCurso,
                'ci_tutor'=>$this->carnet,   
                'nombre_estu'=>$this->nombreCaEst,              
                'relacion'=>$this->relacion,
                'cod_estu'=>$this->carnetEst,
            ]);
        }
        
        return redirect()->route('buscar')->with('carnet', $this->carnet);

    }
    public function nextStep()
    {
            if ($this->step < 5)
                $this->step++;
    }

    public function previousStep()
    {
        if ($this->step > 1)
            $this->step--;
    }

    public function escuela($name, $id){
        $this->nombreEscuela = $name;
        $this->idEscuela = $id;
    }

    public function updatedProSeleccion(){
        $this->nombreEscuela = '';
        $this->idEscuela = null;
    }

    public function updatedDepSeleccion(){
        $this->nombreEscuela = '';
        $this->idEscuela = null;
    }

    public function tipoRe($num){
        $this->tipoReg = $num;
    }

    public function deleteActual(){
        $this->tipoReg = 0;
    }

    public function mount(){
        $this->depSeleccion = 'Santa Cruz';
        $this->tipoReg = 0;
        $this->depSeleccionEst = 'Santa Cruz';
        $this->etniaEst = 'Ninguno';
        $this->tipoCurso = 'Primaria';

    }
}
