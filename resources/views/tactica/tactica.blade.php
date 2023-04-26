@extends('layout.public')
@section('content')

    <div class="container-fluid">
        <div>
            <h2 class="text-dark">Este sería un título para saber quien es el rival, su horario y su dirección de juego</h2>
            <textarea name="" id="" cols="100" rows="10">Aquí sería la descripción del partido, qué nos vamos a encontrar y presentaré las tácticas a realizar. </textarea>
        </div>
        <div class="row d-flex">
            <div class="col-lg-6 col-sm-12">
                <h3>Titulo táctica</h3>
                <img src="{{asset('img/result.jpg')}}" alt="Descripción de la imagen" class="my-3" />
                <p class="text-start">
                    Texto de la card que describe la imagen y/o el contenido que se desea
                    mostrar.
                </p>
            </div>
            <div class="col-lg-6 col-sm-12">
                <h3>Titulo táctica</h3>
                <img src="{{asset('img/result.jpg')}}" alt="Descripción de la imagen" class="my-3" />
                <p class="text-start">
                    Texto de la card que describe la imagen y/o el contenido que se desea
                    mostrar.
                </p>
            </div>
        </div>
    </div>
@endsection
