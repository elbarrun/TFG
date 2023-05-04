@extends('layout.public')
@section('content')
    @yield('content')
        <div class="container-fluid">
            <div class="card-loyola mt-5">
                <div class="row g-0">
                    <div class="col-12 col-sm-8">
            <?php foreach ($equipos as $team){?>
            <h5 class="card-title mb-4"><?=$team->titulo?></h5>
            <img src="{{ asset('storage/equipos/' . $team->file) }}" alt="Descripción de la imagen" class="img-fluid w-100 mt-md-2" />
                        <div class="col-12 col-sm-4 mt-md-5">
            <p class="card-text">
                    <?=$team->descripcion?>
            </p>
            <?php }?>
        </div>
                    </div> </div> </div> </div> <
@endsection
