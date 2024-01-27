<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ? $title.' |': '' }} Ministerio Educacion</title>
    <!-- Logo -->
    <link rel="shortcut icon" href="{{ asset('images/logo.webp') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css')}}">

    <!-- Iconos -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    {{-- <link href="{{ asset('css/font-awesome/font-awesome.css') }}" rel="stylesheet" /> --}}

    <!-- Sweet Alert -->
    <link href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

    <!-- Gritter -->
    <link href="{{ asset('js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    @livewireStyles
</head>

<body onload="loadMapScenario()">

   
    <div id="wrapper">
       
        
            <header>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('images/logo.webp') }} " width="80" height="60" ></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Inicio</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('/dashboard/reserva/crear')}}">Crear Carnet</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('/404')}}">Vice-ministerios</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('/404')}}">Transparencia</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('/404')}}">Comunicacion</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('/dashboard/reserva/sortear')}}">Contactos</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </header>

            <!-- Contenido principal -->
            <div class="wrapper wrapper-content">
                {{ $slot }}
            </div>


            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                  <li class="nav-item"><a href="{{url('/')}}" class="nav-link px-2 text-muted">Inicio</a></li>
                  <li class="nav-item"><a href="{{url('/404')}}" class="nav-link px-2 text-muted">Ministerios</a></li>
                  <li class="nav-item"><a href="{{url('/404')}}" class="nav-link px-2 text-muted">Vice-ministerios</a></li>
                  <li class="nav-item"><a href="{{url('/404')}}" class="nav-link px-2 text-muted">Transparencia</a></li>
                  <li class="nav-item"><a href="{{url('/404')}}" class="nav-link px-2 text-muted">Comunicacion</a></li>
                </ul>
                <p class="text-center text-muted">© 2024 derechos reservados, Inc</p>
              </footer>
       
    </div>
    <!-- Mainly scripts -->
    <script src="{{ asset('js\jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>

    <!-- Livewire y js de modales -->
    @livewireScripts

    <!-- Sweet alert - CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script> -->
    @stack('scripts')

</body>

</html>