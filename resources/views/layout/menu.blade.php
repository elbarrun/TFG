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
