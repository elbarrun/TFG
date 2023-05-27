
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
        <div class="row mt-5">
            @foreach($tacticas as $tactic)
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card-tactica ">
                        <h5 class="text-center">{{ $tactic->titulo }}</h5>
                        <img src="{{ asset('storage/tacticas/' . $tactic->file) }}" class="card-img-top img-fluid mw-100" alt="Descripción de la imagen">
                        <div class="card-body ms-3">
                            <p class="card-text">{{ $tactic->descripcion }}</p>
                            @if(Auth::check() && (Auth::user()->hasRole('Admin') || (Auth::user()->hasRole('Entrenador') && Auth::id() == $tactic->user_id)) )
                                <a href="{{ route('tacticas.edit', $tactic) }}" class="btn btn-primary">Editar</a>
                                <form method="POST" action="{{ route('tacticas.destroy', $tactic) }}" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ">Eliminar</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    @if(Auth::check() && !Auth::user()->hasRole('Jugador'))
        <a href="{{ route('tacticas.create') }}" class="btn btn-success">Crear Táctica</a>
    @endif
</body></html><script>
    AOS.init();
</script>
@yield('content')

@include('layout.footer')
