@extends('layout.public')
@section('content')
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
