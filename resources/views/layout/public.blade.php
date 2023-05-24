
<!DOCTYPE html>
<html>
<head>
    <title>AD.Loyola</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
    <link rel="icon" type="image/x-icon" href="{{asset('storage/favicon.ico')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">




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
                <li class="nav-item">
                    <a class="nav-link our-text" href="{{url('tacticas')}}">Tácticas</a>
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



@yield('content')

<!-- Footer -->
<footer class="footer mt-5 our-bg text-white py-5">
    <div class="container">
        <div class="row">
            <!-- Columna 1 -->
            <div class="col-md-4">
                <h5>Nuestro Club</h5>
                <p>Desde la iniciación al baloncesto para niños y niñas de 1o de Primaria, hasta el
                    baloncesto en pista grande, pasando por la modalidad intermedia del minibasket, se
                    ofrece una actividad deportiva de gran arraigo en nuestro colegio. Se participa en los
                    Juegos Deportivos de La Rioja o liga federada a través de la A.D. Loyola, jornadas de
                    tecnificación y diversos torneos o actividades competitivas durante el año.</p>
            </div>
            <!-- Columna 2 -->
            <div class="col-md-4">
                <h5>Contacto</h5>
                <p>Dirección: C/Duques de Nájera Nº19, 26002 Logroño, La Rioja</p>
                <p>Teléfono: 656885285</p>
                <p>Email: dam10.2022.jesuitas@gmail.com</p>
            </div>
            <!-- Columna 3 -->
            <div class="col-md-4">
                <h5>Redes Sociales</h5>
                <p>Síguenos en nuestras redes sociales para estar al día de nuestras últimas noticias y eventos.</p>
                <a href="{{url('https://www.facebook.com/ADLOYOLA/?locale=es_ES')}}" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{url('https://twitter.com/adloyola1?lang=es')}}" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="{{url('https://www.instagram.com/ad_loyola/?hl=es')}}" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-white">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
        <a href="{{url('/register')}}">Admin</a>
    </div>
    <div class="text-center py-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <p class="mb-0">© 2023 Equipo de Baloncesto. Todos los derechos reservados.</p>
    </div>
</footer>
<!-- Fin de Footer -->

</body>


<!--PROHIBIDO TOCAR-->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"
></script>
</html>

