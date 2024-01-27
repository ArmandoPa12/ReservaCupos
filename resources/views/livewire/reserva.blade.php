<x-slot:title>
    Reserva
    </x-slot>
<div>
    


    <div class="row">
      <div class="col"></div>
      <div class="col">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card text-bg-secundary  mb-3">
            <div class="card-body">
              <h5 class="card-title">Reservar cupo</h5>
              <p class="card-text">Registrar para el sorteo de cupos de la gestion 2024</p>
              {{-- <a href="{{url('/dashboard/reserva/opciones')}}" class="btn btn-primary">Ir a reservar</a> --}}
              <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeCreacion"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i>Ir a reservar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col"></div>

        
        {{-- <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ver estado de Reserva</h5>
              <p class="card-text">Puede ver el estado de reserva del estudiante</p>
              <a href="{{url('/dashboard/reserva/buscar')}}" class="btn btn-primary">Ver estado</a>
            </div>
          </div>
        </div> --}}
      </div>

      {{-- <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeCreacion"><i class="fa fa-plus"></i> Crear funcionalidad</button> --}}


      <div wire:ignore.self id="modalDeCreacion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="crearFuncionalidad" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="crearFuncionalidad">Antes de continuar</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close" wire:click="cancelar"></button>
                </div>
                <div class="modal-body">
                    <h3>Usted cuenta con un <strong>carnet de identidad</strong> en el registro nacional de Bolivia?</h3>
                   
                </div>
                <div class="modal-footer">
                    <a href="{{url('/dashboard/reserva/opciones')}}" type="button" class="btn btn-success" >Si tengo</a>
                    <a href="{{url('/dashboard/reserva/crear')}}" type="button" class="btn btn-info">No tengo</a>
                </div>
            </div>
        </div>
    </div>
    
</div>


@push('scripts')
    <script>
        window.addEventListener('cerrar-modal', event => {
            $('#modalDeCreacion').modal('hide');
        });
        
    </script>