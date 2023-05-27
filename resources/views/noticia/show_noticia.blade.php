
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


    @foreach ($noticias as $noticia)
        <div data-aos="fade-down"
             data-aos-easing="linear"
             data-aos-duration="1000">
        <div class="card-loyola col-lg-6 col-sm-12 mt-5">
            <h2 class="text-start">{{ $noticia->titulo }}</h2>
            <div class="img-container">
                <img src="{{ asset('storage/noticias/' . $noticia->file) }}" alt="Descripción de la imagen" class="my-3" />
            </div>
            <p class="text-start mt-4">
                {{ $noticia->descripcion }}
            </p>

            @if(Auth::check() && (Auth::user()->hasRole('Admin')||(Auth::user()->hasRole('Entrenador') && Auth::id()== $noticia->user_id)) )
                <a href="{{ route('noticia.edit', $noticia) }}" class="btn btn-primary mb-2">Editar</a>
                <form method="POST" action="{{ route('noticia.destroy', $noticia) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            @endif
        </div>
    @endforeach
</div>
</div>
</div>
</body>

<!-- Footer -->


</html>


@if(Auth::check() && !Auth::user()->hasRole('Jugador'))
    <a href="{{ route('noticia.create') }}" class="btn btn-success">Crear Noticia</a>
@endif
@yield('content')

@include('layout.footer')
<script>
    AOS.init();
</script>
