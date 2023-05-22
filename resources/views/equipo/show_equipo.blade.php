@extends('layout.public')

@section('content')
    @yield('content')

    <div class="container-fluid">
        <div class="row mt-5">
            @foreach($equipos as $team)
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <h5 class="text-center">{{ $team->titulo }}</h5>
                        <img src="{{ asset('storage/equipos/' . $team->file) }}" class="card-img-top img-fluid mw-100" alt="Descripción de la imagen">
                        <div class="card-body">
                            <p class="card-text">{{ $team->descripcion }}</p>
                            @if(Auth::check() && Auth::user()->hasRole('Admin'))
                                <a href="{{ route('tacticas.edit', $team) }}" class="btn btn-primary mb-2">Editar</a>
                                <form method="POST" action="{{ route('tacticas.destroy', $team) }}" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @if(Auth::check() && Auth::user()->hasRole('Admin'))
        <a href="{{ route('equipos.create') }}" class="btn btn-success">Crear equipo</a>
    @endif

@endsection
