@extends('layout.public')
@section('content')
    @yield('content')

    <div class="row mt-5 d-flex">
        <div class="col-lg-6 col-sm-12">
            <?php foreach ($tacticas as $tactic){?>
            <h3><?=$tactic->titulo?></h3>
            <img src="{{ asset('storage/tacticas/' . $tactic->file) }}" alt="Descripción de la imagen" class="my-3" />
            <p class="text-start">
                    <?=$tactic->descripcion?>
            </p>
            <?php }?>
        </div>
    </div>

@endsection
