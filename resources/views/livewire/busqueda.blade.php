<x-slot:title>
    Buscar
    </x-slot>
<div>
    
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox" style="height: 500px">
                <div class="ibox-content ">
                    <div class="container mt-5">
                        <h1>Estado de reserva</h1>
                        <div class="row">
                            <div class="col-4">
                                <div class="card" id="card1">
                                    <div class="card-body">
                                        {{-- <h5 class="card-title">Registro del Tutor</h5> --}}
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
                                                        
                                                    </div>
    
                                                </div>

                                                <div class="col-4">
    
                                                    <label for="basic-url" class="form-label">Expendido</label>
    
                                                    <div>
                                                        <div class="input-group mb-3">
                                                                <input wire:model="exp" type="text" disabled
                                                             class="form-control"
                                                                style="width: 10%"> 
                                                        </div>
                                                       
                                                    </div>
    
    
                                                </div>
                                            </div>
    
    
                                            <label for="basic-url" class="form-label">Nombre</label>
                                            <div>
                                                <div class="input-group mb-3">
                                                    <input type="text" wire:model="nombre" disabled class="form-control">
    
                                                </div>
                                              
                                            </div>
    
    
                                            <label for="basic-url" class="form-label">Apellido paterno</label>
                                            <div>
                                                <div class="input-group mb-3">
                                                    <input type="text" wire:model="paterno" disabled class="form-control">
    
                                                </div>
                                                
                                            </div>
    
                                            <div>
                                                <label for="basic-url" class="form-label">Apellido materno</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" wire:model="materno" disabled class="form-control">
    
                                                </div>
                                                
                                            </div>
                                    

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex ">
                                
                                <div class="container mt-3">
                                @if (strlen($carnet)>0)
                                <div class="mx-3">
                                    <div class="card" style="width: 10rem;">
                                        <a href="#" wire:click="mandar" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                              <h5 class="mb-1">Agregar mas estudiantes</h5>
                                            <h1>+</h1>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endif

                                @if ($busqueda != null)
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">Nombre escuela</th>
                                        <th scope="col">Grado</th>
                                        <th scope="col">Curso</th>
                                        <th scope="col">Nombre del Estudiante</th>
                                        <th scope="col">Codgio del Estudiante</th>
                                        <th scope="col">Relacio</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Accion</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($busqueda as $bus)
                                    
                                    
                                          <tr>
                                            <th>{{$bus->nombre_escu}}</th>
                                            <td>{{$bus->grado}}</td>
                                            <td>{{$bus->curso}}</td>
                                            <td>{{$bus->nombre_estu}}</td>
                                            <td>{{$bus->cod_estu}}</td>
                                            <td>{{$bus->relacion}}</td>

                                            @if ($bus->ganador == 0)
                                            <td>En espera</td>
                                            @else
                                                @if ($bus->ganador == 1)
                                                 <td>Aceptado</td>                                                    
                                                @else
                                                <td>Rechazado</td>                                                                                                    
                                                @endif
                                            @endif

                                            <td><button class="btn btn-danger" wire:click="borrar({{$bus->id}})" >Eliminar</button></td>
                                          </tr>
                                        
                                     

                                    {{-- <div class="mx-3">
                                        <div class="card" style="width: 10rem;">
                                            <div class="card-body">
                                              <h5 class="card-title">Escuela: {{$bus->nombre_escu}}</h5>
                                              

                                              <p class="card-text">
                                                <h4 class="card-subtitle mb-2 text-body-secondary">Grado: {{$bus->grado}}</h4>
                                                <h4 class="card-subtitle mb-2 text-body-secondary">Curso: {{$bus->curso}}</h4>
                                                <h4 class="card-subtitle mb-2 text-body-secondary">Estudiante: {{$bus->nombre_estu}}</h4>
                                                <h4 class="card-subtitle mb-2 text-body-secondary">Relacion: {{$bus->cod_estu}}</h4>
                                                
                                                <h4 class="card-subtitle mb-2 text-body-secondary">Relacion: {{$bus->relacion}}</h4>
                                                
                                            </p>                                
                                            </div>
                                        </div>
                                    </div> --}}
                                    
                                    @endforeach
                                </tbody>
                            </table>

                                @endif
                                
                                </div>
                            
                            </div>
                        </div>
                
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    
</div>
{{-- 
<div m-3>
    <div class="card" style="width: 10rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                
        </div>
    </div>
</div> --}}