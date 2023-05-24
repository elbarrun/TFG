@extends('layout.public')
@section('content')
    <form method="POST" action="{{url('login')}}" enctype="multipart/form-data">
        @csrf
        <div class="c__login_coach">
            <div class="container log_coach bg-white p-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center mb-4">
                        <h3 class="text-uppercase">¡Bienvenido coach! </h3>

                    </div>
                    <div class="col-md-12 col-lg-6 mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Usuario">
                    </div>
                    <div class="col-md-12 col-lg-6 mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary" href="{{url('/')}}">Acceder como entrenador</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
