
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


    <form method="POST" action="{{url('login')}}" enctype="multipart/form-data">
        @csrf

        <div class="c__login_gen">
            <div class="container-fluid">
                <div class="row d-flex ">
                    <div class="text-center cont-btns justify-content-center align-items-center">
                        <h3 class="text-white mb-3">¿Cómo desea acceder?</h3>

                        <a href="{{url('login-coach')}}" class="btn btn-primary btn-lg col-lg-5 col-12 gap">Soy entrenador</a>
                        <a href="{{url('login-player')}}" class="btn btn-outline-secondary text-primary btn-lg col-lg-5 col-12">Soy jugador</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@section('content')
@endsection



{{--x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
--}}
