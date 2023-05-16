@extends('layout.public')

@section('content')
    @yield('content')

    <div class="container-fluid">
        <div class="row mt-5">
            @foreach($tacticas as $tactic)
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <h5 class="text-center">{{ $tactic->titulo }}</h5>
                        <img src="{{ asset('storage/tacticas/' . $tactic->file) }}" class="card-img-top img-fluid mw-100" alt="Descripción de la imagen">
                        <div class="card-body">
                            <p class="card-text">{{ $tactic->descripcion }}</p>
                            @if(Auth::check() && Auth::id() == $tactic->user_id)
                                <a href="{{ route('tacticas.edit', $tactic) }}" class="btn btn-primary">Editar</a>
                                <form method="POST" action="{{ route('tacticas.destroy', $tactic) }}" style="display: inline-block">
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

    <a href="{{ route('tacticas.create') }}" class="btn btn-success">Crear Táctica</a>

@endsection
