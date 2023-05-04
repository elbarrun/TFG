@extends('layout.public')
@section('content')
    @yield('content')
    <form method="POST" action="{{url('/tacticas')}}" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="card-loyola mt-5">
                <?php foreach ($noticias as $noticia){?>

                <h2 class="text-start"><?=$noticia->titulo?></h2>
                <img src="{{ asset('storage/noticias/' . $noticia->file) }}" alt="Descripción de la imagen" class="my-3" />
                <p class="text-start">
                        <?=$noticia->descripcion?>
                </p>
                <?php }?>
            </div>
        </div>
    </form>
@endsection
