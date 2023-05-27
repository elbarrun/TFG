
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
