<x-app>
    <x-slot:title>
        Bienvenida
        </x-slot>
        <div class="row">
            
            <div class="col">
            <a class="btn btn-warning" href="{{ url('/dashboard/reserva') }}" role="button"><h5>Inscripciones 2024</h5><h6>(hasta 10-feb)</h6></a>
            </div>
            <div class="col">
            <a class="btn btn-primary" href="{{ url('/dashboard/reserva/buscar') }}" role="button"><h5>Ver Estado de inscripcion</h5></a>

            </div>
            <div class="col">
<div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/stock1.jpg') }} "  width="1000px" height="600px">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/stock2.jpg') }} "  width="1000px" height="600px">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/stock3.jpg') }} "  width="1000px" height="600px">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/stock4.jpg') }} " width="1000px" height="600px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


            </div>
        </div>
        <div>
        </div>
       

        @push('scripts')
        @endpush
</x-app>