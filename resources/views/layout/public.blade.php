
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



</head>
<body>
<div class="c__hero">
    <h1>Bienvenido a la página oficial del Loyola</h1>
</div>
<div class="c__menu">
    <nav class="navbar navbar-expand-lg w-100">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-row justify-content-around w-100">
                <li class="nav-item active">
                    <a class="nav-link our-text" href="{{url('/')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link our-text" href="{{url('tacticas')}}">Tácticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link our-text" href={{url('equipos')}}>Equipos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link our-text" href="#">Contacto</a>
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

<div class="c__footer mt-5 our-bg text-white">
    <div class="container">
        <div class="row">
            <div
                class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center"
            >
                <div>
                    <h1>Redes sociales</h1>
                    <p>facebook</p>
                    <p>instagram</p>
                    <p>twitter</p>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 d-flex justify-content-center">
                <div class="text-center">
                    <h3>telefono:6666666</h3>
                    <img src="{{asset('img/map2.jpg')}}" class="img-map" alt="" />
                    <p>
                        C/Duques de Nájera Nº19 <br/>
                        26002 <br/>
                        Logroño, La Rioja
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
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

