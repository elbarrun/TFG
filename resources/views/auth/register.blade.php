
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
<div class="c__menu">
    <nav class="navbar navbar-expand-lg w-100">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-around">
                <li class="nav-item">
                    <a class="nav-link our-text" href="{{url('/')}}">Inicio</a>
                </li>
                <?php if(Auth::check()): ?>
                <li class="nav-item">
                    <a class="nav-link our-text" href="{{url('tacticas')}}">Tácticas</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link our-text" href="{{url('noticias')}}">Noticias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link our-text" href={{url('equipos')}}>Equipos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link our-text" href={{url('contacto')}}>Contacto</a>
                </li>
                <?php if(Auth::check()): ?>
                <li class="nav-item justify-content-end">
                    <a class="nav-link " aria-current="page" style="color: red;">Bienvenido, <?= Auth::user()->name;?></a>
                </li>

                <li class="nav-item me-2">
                    <form action="{{url('logout')}}" method="POST">
                        @csrf
                        <button class="nav-link btn" aria-current="page" type="submit">Cerrar sesión</button>
                    </form>
                </li>

                <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link our-text" href="{{url('login')}}">Acceder</a>
                </li>
                <?php endif;?>
            </ul>

        </div>
    </nav>
</div>
    <form method="POST" class="justify-content-center" action="{{url('register')}}" enctype="multipart/form-data">
        @csrf
        <p class="h1 mt-5 mb-4 text-center">Registro</p>


        <div class="row w-100 justify-content-center ms-1 mb-3">
            <div class="col-lg-3 col-md-6">
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="Nombre">
            </div>
        </div>

        <div class="row w-100  justify-content-center mb-3 ms-1">
            <div class="col-lg-3 col-md-6">
                <input type="email" name="email" class="form-control " id="inputName3" placeholder="Introduzca email">
            </div>
        </div>
        <div class="row w-100 justify-content-center mb-3 ms-1">
            <div class="col-lg-3 col-md-6">
                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Introduzca contraseña">
            </div>
        </div>
        <div class="row w-100 justify-content-center mb-3 ms-1">
            <div class="col-lg-3 col-md-6">
                <input type="password" name="password_confirmation" class="form-control" id="inputName3" placeholder="Repita contraseña">
            </div>
        </div>

        <div class="row w-100 justify-content-center mb-3 ms-1">
            <div class="col-lg-3 col-md-6">
                <select id="team" class="form-select" name="team_id" required>
                    <option value="">Selecciona el equipo</option>
                    @foreach ($equipos as $equipo)
                        <option value="{{ $equipo->id }}">{{ $equipo->titulo }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row w-100 justify-content-center mb-3 ms-1">
            <div class="col-lg-3 col-md-6">

                <select id="role" class="form-select" name="role" required>
                    <option value="">Selecciona el rol</option>
                    <option value="Entrenador">Entrenador</option>
                    <option value="Jugador">Jugador</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>
        </div>
        <!-- Role -->
        <div class="row justify-content-center mt-4 mb-3">
            <div class="col-3">
                <button type="submit" class="btn btn-primary" href="{{url('/')}}">Registrarme</button>
            </div>
        </div>
        </div>
    </form>
