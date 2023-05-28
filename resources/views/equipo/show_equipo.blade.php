
<!DOCTYPE html>
<html>
<head>
    <title>AD.Loyola</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
    <script src="{{asset('js/index.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{asset('storage/favicon.ico')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>




</head>
<body>
<div class="c__hero">
    <h1>Bienvenido a la página oficial del Loyola</h1>
</div>
@yield('content')

@include('layout.menu')
<div class="container-fluid">
    <div class="row">

        @foreach($equipos as $equipo)

            <div class="col-12 col-lg-8 mb-4"  data-aos="fade-right"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="card-equipo d-flex flex-column-reverse flex-lg-row">
                    <div class="row g-0">

                        <div class="col-12 col-lg-8">
                            <img src="{{ asset('storage/equipos/' . $equipo->file) }}" class="img-fluid w-100" alt="card-horizontal-image">
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card-body mb-3">
                                <h5 class="card-title my-3 text-center text-uppercase ms-5">{{ $equipo->titulo }}</h5>
                                <p class="card-text ms-5">{{ $equipo->descripcion }} </p>
                                @if(Auth::check() && Auth::user()->hasRole('Admin'))
                                    <div class="mb-3 ms-3">
                                        <a href="{{ route('equipos.edit', $equipo) }}" class="btn btn-primary">Editar</a>
                                        <form method="POST" action="{{ route('equipos.destroy', $equipo) }}" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if(Auth::check() && Auth::user()->hasRole('Admin'))
        <a href="{{ route('equipos.create') }}" class="btn btn-success">Crear equipo</a>
    @endif
</div>


</body>
</html>
<script>
    AOS.init();
</script>

@yield('content')

@include('layout.footer')
