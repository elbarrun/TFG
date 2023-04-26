@extends('layout.public')
@section('content')
    @yield('content')
    <form method="POST" action="{{url('/equipos/create')}}" enctype="multipart/form-data">
        @csrf
        <div class="row  justify-content-center ">
            <div class="form-floating d-flex mb-3 col-5">
                <input type="text" name="title" class="form-control" id="floatingInput" placeholder="Título de la tarea">
                <label for="floatingInput" class="ms-2">Título de la tarea</label>
            </div>
            <div class="form-floating d-flex col-5">
                <textarea class="form-control" id="floatingTextarea" name="description" style="height: 300px"></textarea>
                <label for="floatingTextarea" class="ms-3">Descripción de la tarea</label>
            </div>
            <div class="form-floating d-flex col-5">
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="mt-3 col-8">
                <button type="submit" class="btn btn-secondary mx-auto d-block col-2">Subir Tarea</button>
            </div>
        </div>
    </form>
@endsection
