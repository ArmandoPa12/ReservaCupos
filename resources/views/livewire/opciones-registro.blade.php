<x-slot:title>
    Registro
</x-slot>
<div>
    {{ $tipoCurso }}
    {{$curso}}

    <div class="ibox-title">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button"
                        class="btn btn-circle {{ $step != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                    <p>Registro del Tutor</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button"
                        class="btn btn-circle {{ $step != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                    <p>Seleccionar Escuela</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button"
                        class="btn btn-circle {{ $step != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
                    <p>RUDE o Carnet de estudiante</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button"
                        class="btn btn-circle {{ $step != 4 ? 'btn-default' : 'btn-primary' }}">4</a>
                    <p>Confirmar datos</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button"
                        class="btn btn-circle {{ $step != 5 ? 'btn-default' : 'btn-primary' }}">4</a>
                    <p>Seleccionar cursos</p>
                </div>
            </div>
        </div>
    </div>



    <form wire:submit.prevent="store" id="form-id">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox" style="height: 500px">
                <div class="ibox-content ">

                    <div class="row">
                        {{-- Paso 1 --}}
                        <div class="col {{ $step === 1 ? '' : 'dontShow' }}">

                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <div class="card" id="card1">
                                            <div class="card-body">
                                                <h1 class="card-title">Registro del Tutor</h1>
                                                <p class="card-text">


                                                <div class="row">
                                                    <div class="col">
                                                        <label style="color: red">*</label>
                                                        <label for="basic-url" class="form-label">Carnet de
                                                            identidad</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="carnet" type="text"
                                                                placeholder="Ingrese su carnet" class="form-control"
                                                                style="width: 10%">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">

                                                        <label for="basic-url" class="form-label">Expendido</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="exp" type="text" class="form-control"
                                                                disabled style="width: 5%">
                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col">
                                                        <label for="basic-url" class="form-label">Nombre</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" wire:model="nombre" disabled
                                                                style="width: 15px" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label style="color: red">*</label>
                                                        <label for="basic-url" class="form-label">Relacion</label>

                                                        <div class="input-group mb-3">
                                                            <select wire:model="relacion" class="form-select"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                <option value="Tutor">Tutor</option>
                                                                <option value="Padre">Padre</option>
                                                                <option value="Madre">Madre</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <label for="basic-url" class="form-label">Apellido paterno</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" wire:model="paterno" disabled
                                                        class="form-control">
                                                </div>

                                                <label for="basic-url" class="form-label">Apellido materno</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" wire:model="materno" disabled
                                                        class="form-control">
                                                </div>

                                                <div class="row">

                                                    <div class="col">
                                                        <label for="basic-url" class="form-label">Estado civil</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" wire:model="estado" disabled
                                                                class="form-control">
                                                        </div>
                                                    </div>


                                                    <div class="col">
                                                        <label for="basic-url" class="form-label">Fecha de
                                                            nacimiento</label>
                                                        <div class="input-group mb-3">
                                                            <input type="date" wire:model="fecha" disabled
                                                                class="form-control">
                                                        </div>


                                                    </div>
                                                </div>



                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                                {{-- <div class="row" >
                                    <div class="col-9"></div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-primary" onclick="nextStep(1)">Siguiente</button>
                                        <button type="button" @if (!$find)  disabled  @endif class="btn btn-primary" onclick="nextStep(1)">Siguiente</button>
                                    </div>
                                        
                                    
                                </div>
                                 --}}
                            </div>
                        </div>

                        {{-- PASO 2: Detalles de pedido --}}
                        <div class="col {{ $step === 2 ? '' : 'dontShow' }}">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <div class="card" id="card1">
                                            <div class="card-body">
                                                <h5 class="card-title">Seleccionar escuela</h5>
                                                <p class="card-text">

                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <select wire:model="depSeleccion" class="form-select"
                                                            aria-label="Default select example">
                                                            @foreach ($departamentos as $departamento)
                                                                <option value="{{ $departamento }}">
                                                                    {{ $departamento }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        @if ($depSeleccion == 'Santa Cruz')
                                                            <select class="form-select" wire:model="proSeleccion"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                @foreach ($SantaCruz as $santa)
                                                                    <option value="{{ $santa }}">
                                                                        {{ $santa }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif
                                                        @if ($depSeleccion == 'La Paz')
                                                            <select class="form-select" wire:model="proSeleccion"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                @foreach ($LaPaz as $santa)
                                                                    <option value="{{ $santa }}">
                                                                        {{ $santa }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif
                                                        @if ($depSeleccion == 'Cochabamba')
                                                            <select class="form-select" wire:model="proSeleccion"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                @foreach ($Cochabamba as $santa)
                                                                    <option value="{{ $santa }}">
                                                                        {{ $santa }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif
                                                        @if ($depSeleccion == 'Potosí')
                                                            <select class="form-select" wire:model="proSeleccion"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                @foreach ($Potosi as $santa)
                                                                    <option value="{{ $santa }}">
                                                                        {{ $santa }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif
                                                        @if ($depSeleccion == 'Oruro')
                                                            <select class="form-select" wire:model="proSeleccion"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                @foreach ($Oruro as $santa)
                                                                    <option value="{{ $santa }}">
                                                                        {{ $santa }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif
                                                        @if ($depSeleccion == 'Tarija')
                                                            <select class="form-select" wire:model="proSeleccion"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                @foreach ($Tarija as $santa)
                                                                    <option value="{{ $santa }}">
                                                                        {{ $santa }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif
                                                        @if ($depSeleccion == 'Chuquisaca')
                                                            <select class="form-select" wire:model="proSeleccion"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                @foreach ($Chuquisaca as $santa)
                                                                    <option value="{{ $santa }}">
                                                                        {{ $santa }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif
                                                        @if ($depSeleccion == 'Beni')
                                                            <select class="form-select" wire:model="proSeleccion"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                @foreach ($Beni as $santa)
                                                                    <option value="{{ $santa }}">
                                                                        {{ $santa }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif
                                                        @if ($depSeleccion == 'Pando')
                                                            <select class="form-select" wire:model="proSeleccion"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                @foreach ($Pando as $santa)
                                                                    <option value="{{ $santa }}">
                                                                        {{ $santa }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif

                                                    </div>
                                                </div>
                                                <label style="color: red">*</label>
                                                <label for="basic-url" class="form-label">Nombre Escuela</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" style="width: 15px"
                                                        @if ($proSeleccion == '') disabled @endif
                                                        wire:model="nombreEscuela" class="form-control">
                                                </div>

                                                <label for="basic-url" class="form-label">Codigo de Escuela</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" style="width: 15px" disabled
                                                        wire:model="idEscuela" class="form-control">
                                                </div>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">

                                        <div class="card" id="card1">
                                            <div class="card-body">
                                                @if ($nombreEscuela > 0)
                                                    <h5 class="card-title">Escoga escuela</h5>
                                                    <p class="card-text">
                                                    <ul class="todo-list small-list">
                                                        @foreach ($escuelaSelecion as $escuela)
                                                            <li class="p-0">
                                                                <button class="btn col-lg-12 text-start"
                                                                    type="button"
                                                                    wire:click="escuela('{{ $escuela->nombre }}','{{ $escuela->codigo }}')">
                                                                    <b>Nombre: {{ $escuela->nombre }}</b> <br>
                                                                    Ubicacion: {{ $escuela->ubicacion }}</button>
                                                            </li>
                                                        @endforeach
                                                    </ul>

                                                    </p>
                                                @endif
                                            </div>
                                        </div>




                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- PASO 3: Información de pago --}}
                        <div class="col {{ $step === 3 ? '' : 'dontShow' }}">

                            <div class="container mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-2"></div>
                                    <div class="col-4 mx-auto {{ $tipoReg === 2 ? 'dontShow' : '' }}">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="card text-bg-secundary mb-3">

                                                <div class="card-body">
                                                    @if ($tipoReg != 0)
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            wire:click="deleteActual">X</button>
                                                    @endif
                                                    <h3 class="card-title">Estudiante Antiguo</h3>
                                                    <p class="card-text">Necesita el codigo <b>RUDE</b> del estudiante
                                                        que se encuentra en la libreta de notas de la anterior gestion
                                                        <img src="{{ asset('images/rude.png') }}"  width="180" height="100" >
                                                    </p>
                                                    @if ($tipoReg != 1)
                                                        <a wire:click="tipoRe(1)" class="btn btn-primary">Estudiante
                                                            Antiguo</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mx-auto {{ $tipoReg === 1 ? 'dontShow' : '' }} ">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="card text-bg-secundary mb-3">
                                                <div class="card-body">
                                                    @if ($tipoReg != 0)
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            wire:click="deleteActual">X</button>
                                                    @endif
                                                    <h3 class="card-title">Estudiante Nuevo</h3>
                                                    
                                                    <p class="card-text">Necesita el <b>carnet de identidad</b> del
                                                        estudiante<br><br>
                                                        <img src="{{ asset('images/carnet.jpg') }}"  width="180" height="110" >
                                                    </p>

                                                    @if ($tipoReg != 2)
                                                        <a wire:click="tipoRe(2)" class="btn btn-primary">Estudiante
                                                            Nuevo</a>
                                                    @endif



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- PASO 4: Confirmar creación del pedido --}}
                        <div class="col {{ $step === 4 ? '' : 'dontShow' }}">
                            @if ($tipoReg === 1)
                            <div class="container mt-5">
                                <div class="row">


                                    <div class="col">
                                        <div class="card" id="card1">
                                            <div class="card-body">
                                                <h1 class="card-title">Datos del estudiante</h1>
                                                <p class="card-text">
                                                        <label style="color: red">*</label>
                                                        <label for="basic-url" class="form-label">Rude el estudiante</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="rude" type="text"
                                                                placeholder="Ingrese su RUDE" class="form-control"
                                                                style="width: 10%">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="basic-url" class="form-label">Nombre del Estudiante</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" wire:model="nombreEst" disabled
                                                                        style="width: 15px" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                            
                                                                <div class="input-group mb-3">
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <label for="basic-url" class="form-label">Apellido paterno del Estudiante</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" wire:model="paternoEst" disabled
                                                                class="form-control">
                                                        </div>


                                                        <label for="basic-url" class="form-label">Apellido materno del Estudiante</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" wire:model="maternoEst" disabled
                                                                class="form-control">
                                                        </div>

                                                        {{$sexoEst}}
                                                        <label for="basic-url" class="form-label">Sexo</label>
                                                        <div class="input-group mb-3">
                                                            <select wire:model="sexoEst" class="form-select" disabled style="width: 10%">
                                                            <option value=""></option>
                                                            <option value="M">M</option>
                                                            <option value="F">F</option>
                                                            </select>
                                                        </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="card" id="card1">
                                            <div class="card-body">
                                                <h1 class="card-title">Datos de ubicacion</h1>
                                                <p class="card-text">
                                                    
                                                       

                                                        <div class="row">
                                                            <div class="col">
                                                                <label style="color: red">*</label>
                                                                <label for="basic-url" class="form-label">Departamento</label>
                                                                <select wire:model="depSeleccionEst" class="form-select"
                                                                    aria-label="Default select example">
                                                                    @foreach ($departamentos as $departamento)
                                                                        <option value="{{ $departamento }}">
                                                                            {{ $departamento }}</option>
                                                                    @endforeach
                                                                </select>
                                                            
                                                            </div>
                                                            <div class="col">
                                                            
                                                                <label style="color: red">*</label>
                                                                <label for="basic-url" class="form-label">Provincia</label>
                                                                <select class="form-select" wire:model="proSeleccionEst"
                                                                aria-label="Default select example">
                                                                <option value=""></option>
                                                                @foreach ($SantaCruz as $santa)
                                                                    <option value="{{ $santa }}">
                                                                        {{ $santa }}</option>
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
        
                                                        <label style="color: red">*</label>
                                                        <label for="basic-url" class="form-label">Municipio</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" wire:model="municipioEst" 
                                                                class="form-control">
                                                        </div>


                                                        <label style="color: red">*</label>
                                                        <label for="basic-url" class="form-label">Comunidad</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" wire:model="comunidadEst" 
                                                                class="form-control">
                                                        </div>

                                                        <label style="color: red">*</label>
                                                        <label for="basic-url" class="form-label">Zona</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" wire:model="zonaEst" 
                                                                class="form-control">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col">
                                                                <label style="color: red">*</label>
                                                                <label for="basic-url" class="form-label">Calle</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" wire:model="calleEst" 
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label style="color: red">*</label>
                                                                <label for="basic-url" class="form-label">N Vivienda</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" wire:model="viviendaEst" 
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <label style="color: red">*</label>
                                                                <label for="basic-url" class="form-label">Celular de contacto</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" wire:model="celularEst" 
                                                                        class="form-control">
                                                                </div>
                                                        
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="card" id="card1">
                                            <div class="card-body">
                                                <h1 class="card-title">Etnia del Estudiante</h1>
                                                <p class="card-text">
                                                                <label style="color: red">*</label>
                                                                <label for="basic-url" class="form-label">Etnia</label>
                                                                <select wire:model="etniaEst" class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option value="Ninguno">Ninguno</option>
                                                                    @foreach ($etnias_bolivia as $etnias)
                                                                        <option value="{{ $etnias }}">
                                                                            {{ $etnias }}</option>
                                                                    @endforeach
                                                                </select>
                                                       
                                                                <label style="color: red">*</label>
                                                                <label for="basic-url" class="form-label">Idioma</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" wire:model="idiomaEst" 
                                                                        class="form-control">
                                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                              
                            </div>
                            @else

                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <div class="card" id="card1">
                                            <div class="card-body">
                                                <h1 class="card-title">Datos del Estudiante</h1>
                                                <p class="card-text">
                                                    @if ($iguales)
                                                    <label style="color: red">* no puede usar el mismo carnet de tutor y estudiante</label>
                                                    @endif

                                                <div class="row">
                                                    <div class="col">
                                                        <label style="color: red">*</label>
                                                        <label for="basic-url" class="form-label">Carnet de
                                                            identidad</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="carnetEst" type="text"
                                                                placeholder="Ingrese su carnet" class="form-control"
                                                                style="width: 10%">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">

                                                        <label for="basic-url" class="form-label">Expendido</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="expEst" type="text" class="form-control"
                                                                disabled style="width: 5%">
                                                        </div>


                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col">
                                                        <label for="basic-url" class="form-label">Nombre</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" wire:model="nombreCaEst" disabled
                                                                style="width: 15px" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                       
                                                    </div>
                                                </div>


                                                <label for="basic-url" class="form-label">Apellido paterno</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" wire:model="paternoCaEst" disabled
                                                        class="form-control">
                                                </div>

                                                <label for="basic-url" class="form-label">Apellido materno</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" wire:model="maternoCaEst" disabled
                                                        class="form-control">
                                                </div>

                                                <div class="row">

                                                    <div class="col">
                                                        <label for="basic-url" class="form-label">Estado civil</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" wire:model="estadoCaEst" disabled
                                                                class="form-control">
                                                        </div>
                                                    </div>


                                                    <div class="col">
                                                        <label for="basic-url" class="form-label">Fecha de
                                                            nacimiento</label>
                                                        <div class="input-group mb-3">
                                                            <input type="date" wire:model="fechaCaEst" disabled
                                                                class="form-control">
                                                        </div>


                                                    </div>
                                                </div>



                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                                
                            </div>
                            @endif
                        </div>

                        <div class="col {{ $step === 5 ? '' : 'dontShow' }}">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <div class="card" id="card1">
                                            <div class="card-body">
                                                <h1 class="card-title">Seleccionar curso a inscribir</h1>
                                                <p class="card-text">
                                                   

                                                <div class="row">
                                                    <div class="col">
                                                        <label for="basic-url" class="form-label">Unidad Edicativa</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="nombreEscuela" type="text"
                                                               class="form-control" disabled
                                                                style="width: 10%">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">

                                                        <label for="basic-url" class="form-label">Codigo</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="idEscuela" type="text" class="form-control"
                                                                disabled style="width: 10%"> 
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        @if ($tipoReg === 1)
                                                        <label for="basic-url" class="form-label">Nombre estudiant</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="nombreEst" type="text" class="form-control"
                                                                disabled style="width: 10%"> 
                                                        </div> 
                                                        @else
                                                        <label for="basic-url" class="form-label">Nombre estudiante</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="nombreCaEst" type="text"
                                                               class="form-control" disabled
                                                                style="width: 10%">
                                                        </div>
                                                        @endif
                                                        
                                                    </div>
                                                    <div class="col-4">
                                                        @if ($tipoReg === 1)
                                                        <label for="basic-url" class="form-label">RUDE</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="rude" type="text" class="form-control"
                                                                disabled style="width: 10%"> 
                                                        </div> 
                                                        @else
                                                        <label for="basic-url" class="form-label">Carnet</label>
                                                        <div class="input-group mb-3">
                                                            <input wire:model="carnetEst" type="text" class="form-control"
                                                                disabled style="width: 10%"> 
                                                        </div>
                                                        @endif
                                                        

                                                        


                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col">
                                                        <label for="grado" class="form-label">Grado</label>
                                                        <div class="input-group mb-3">
                                                            <select wire:model="grado" class="form-select" style="width: 10%">
                                                                <option value="Primaria">Primaria</option>
                                                                <option value="Secundaria">Secundaria</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col">
                                                        <label for="curso" class="form-label">Curso</label>
                                                        <div class="input-group mb-3">
                                                            <select wire:model="tipoCurso" class="form-select" style="width: 10%">
                                                                <option value=""></option>
                                                                @if ($grado == 'Primaria')
                                                                    @foreach ($cursosPrimaria as $curso)
                                                                        <option value="{{ $curso }}">{{ $curso }}</option>
                                                                    @endforeach
                                                                @elseif ($grado == 'Secundaria')
                                                                    @foreach ($cursosSecundaria as $curso)
                                                                        <option value="{{ $curso }}">{{ $curso }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                                
                            </div>
                        </div>





                        @if ($step == 1)
                            <div class="ibox-footer text-right">
                                <button class="btn btn-secondary" type="button"
                                    wire:click="previousStep">Anterior</button>

                                @if (strlen($relacion) != 0 && strlen($carnet))
                                    <button class="btn btn-primary" type="button"
                                        wire:click="multiClick">Siguiente</button>
                                @else
                                    <button class="btn btn-primary" disabled type="button"
                                        wire:click="multiClick">Siguiente</button>
                                @endif
                            </div>
                        @endif

                        @if ($step == 2)
                            <div class="ibox-footer text-right">
                                <button class="btn btn-secondary" type="button"
                                    wire:click="previousStep">Anterior</button>
                                @if (strlen($idEscuela))
                                    <button class="btn btn-primary" type="button"
                                        wire:click="multiClick">Siguiente</button>
                                @else
                                    <button class="btn btn-primary" disabled type="button"
                                        wire:click="multiClick">Siguiente</button>
                                @endif
                                {{-- <button class="btn btn-primary" type="button"
                                    wire:click="nextStep">Siguiente</button> --}}
                            </div>
                        @endif

                        @if ($step == 3)
                            <div class="ibox-footer text-right">
                                <button class="btn btn-secondary" type="button"
                                    wire:click="previousStep">Anterior</button>

                                @if ($tipoReg === 0)
                                    <button class="btn btn-primary" disabled type="button"
                                        wire:click="nextStep">Siguiente</button>
                                @else
                                    <button class="btn btn-primary" type="button"
                                        wire:click="nextStep">Siguiente</button>
                                @endif


                            </div>
                        @endif

                        @if ($step == 4)
                            <div class="ibox-footer text-right">
                                <button class="btn btn-secondary" type="button"
                                    wire:click="previousStep">Anterior</button>
                                
                                    @if ($tipoReg === 1)
                                        <button class="btn btn-primary" type="button" @if(strlen($estuId) == 0 ) disabled @endif
                                        wire:click="nextStep">Siguiente</button>
                                    @else
                                        @if (!$iguales)
                                            <button class="btn btn-primary" type="button" @if(strlen($carnetEst) == 0 ) disabled @endif
                                            wire:click="nextStep">Siguiente</button>
                                        @endif
                                    
                                    @endif
                                    
                            </div>
                        @endif

                        @if ($step == 5)
                            <div class="ibox-footer text-right">
                                <button class="btn btn-secondary" type="button"
                                    wire:click="previousStep">Anterior</button>
                                <button type="submit" form="form-id"class="btn btn-primary">Enviar datos</button>
                                {{-- <button type="submit"  class="btn btn-primary border border-secondary rounded"><h4>Guardar</h4></button> --}}
                            </div>
                        @endif


                        {{-- <div class="ibox-footer text-right">
                            <button class="btn btn-secondary" type="button" wire:click="previousStep">Anterior</button>
                            @if ($step === 4)
                            <button type="submit" class="btn btn-primary">Crear pedido</button>
                            @else
                            <button class="btn btn-primary" type="button" wire:click="nextStep">Siguiente</button>
                            @endif
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </form>

    {{-- scrip para carnet --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        // Función para avanzar al siguiente paso
        function nextStep(currentStep) {
            document.getElementById(`step-${currentStep}`).style.display = 'none';
            document.getElementById(`step-${currentStep + 1}`).style.display = 'block';
        }

        // Función para retroceder al paso anterior
        function prevStep(currentStep) {
            document.getElementById(`step-${currentStep}`).style.display = 'none';
            document.getElementById(`step-${currentStep - 1}`).style.display = 'block';
        }
    </script>

</div>





{{-- <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AsDyshD9NVW1I7sXTmzk7ZyBIN4f8KtwIpWTFHQ6aggus8TDKEzpeDd5GDLyQKlw'></script>

    <div id="myMap" style="width: 100%; height: 400px;"></div>

    <script>
        function loadMapScenario() {

            var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
                credentials: 'AsDyshD9NVW1I7sXTmzk7ZyBIN4f8KtwIpWTFHQ6aggus8TDKEzpeDd5GDLyQKlw', // Sustituye con tu clave de API
                center: new Microsoft.Maps.Location(47.6062, -122.3321), // Coordenadas del centro del mapa
                zoom: 12 // Nivel de zoom inicial
            });

            
        }
        
    </script> --}}
