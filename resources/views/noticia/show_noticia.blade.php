@extends('layout.public')
@section('content')
    @yield('content')

    <div class="container-fluid">
        @foreach ($noticias as $noticia)
            <div class="card-loyola mt-5">
                <h2 class="text-start">{{ $noticia->titulo }}</h2>
                <img src="{{ asset('storage/noticias/' . $noticia->file) }}" alt="Descripción de la imagen" class="my-3" />
                <p class="text-start">
                    {{ $noticia->descripcion }}
                </p>

                @if(Auth::check() && Auth::id() == $noticia->user_id)
                    <a href="{{ route('noticia.edit', $noticia) }}" class="btn btn-primary">Editar</a>
                    <form method="POST" action="{{ route('noticia.destroy', $noticia) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
    <a href="{{ route('noticia.create') }}" class="btn btn-success">Crear Noticia</a>
@endsection
