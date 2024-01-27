<x-slot:title>
    Carnet
</x-slot>
<div>

    <form wire:submit.prevent="store" id="form-id">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox" style="height: 500px">
                <div class="ibox-content ">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <div class="card" id="card1">
                                    <div class="card-body">
                                        <h1 class="card-title">Crear Carnet de identidad</h1>
                                        <p class="card-text">


                                        <div class="row">
                                            <div class="col">
                                               
                                                <label style="color: red">*</label>
                                                <label for="basic-url" class="form-label">Carnet de
                                                    identidad</label>
                                                <div>
                                                    <div class="input-group mb-3">
                                                        <input wire:model="carnet" type="text"
                                                            placeholder="Ingrese su carnet" class="form-control"
                                                            style="width: 10%">
                                                    </div>
                                                    @error('carnet')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-4">

                                                <label for="basic-url" class="form-label">Expendido</label>

                                                <div>
                                                    <div class="input-group mb-3">

                                                        <select wire:model="exp" class="form-select"
                                                            aria-label="Default select example">
                                                            <option value=""></option>
                                                            @foreach ($abreviacion as $exten)
                                                                <option value="{{ $exten }}">{{ $exten }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    @error('exp')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>


                                            </div>
                                        </div>



                                        <label style="color: red">*</label>
                                        <label for="basic-url" class="form-label">Nombre</label>
                                        <div>
                                            <div class="input-group mb-3">
                                                <input type="text" wire:model="nombre" class="form-control">

                                            </div>
                                            @error('nombre')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>



                                        <label style="color: red">*</label>
                                        <label for="basic-url" class="form-label">Apellido paterno</label>
                                        <div>
                                            <div class="input-group mb-3">
                                                <input type="text" wire:model="paterno" class="form-control">

                                            </div>
                                            @error('paterno')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label style="color: red">*</label>
                                            <label for="basic-url" class="form-label">Apellido materno</label>
                                            <div class="input-group mb-3">
                                                <input type="text" wire:model="materno" class="form-control">

                                            </div>
                                            @error('paterno')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="row">

                                            <div class="col">
                                                <label style="color: red">*</label>
                                                <label for="basic-url" class="form-label">Estado civil</label>
                                                <div class="input-group mb-3">
                                                    <select wire:model="estado" class="form-select"
                                                        aria-label="Default select example">
                                                        <option value=""></option>
                                                        @foreach ($civil as $exten)
                                                            <option value="{{ $exten }}">{{ $exten }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('estado')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col">
                                                <label style="color: red">*</label>
                                                <label for="basic-url" class="form-label">Fecha de
                                                    nacimiento</label>
                                                <div>    
                                                <div class="input-group mb-3">
                                                    <input type="date" wire:model="fecha" class="form-control">
                                                    
                                                </div>
                                                @error('fecha')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>


                                            </div>
                                        </div>



                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-5 mt-5">
                                <div>
                                    <a href="{{url('/dashboard/reserva')}}" type="button" class="btn btn-secondary" ><h4>Cancelar</h4></a>
                            <button type="submit" form="form-id" class="btn btn-primary border border-secondary rounded"><h4>Guardar</h4></button>
                            {{-- <button type="button" class="btn btn-primary" ">Guardar</button> --}}
                        </div></div>
                
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    </form>

</div>
