@extends('layout.public')

@section('content')
    @yield('content')
    <div class="contacto-adl contacto mt-5">
        <div class="container-fluid">
            <div class="row d-flex-align-items-center">
                <div class="col-md-6 col-12 order-2 order-md-1">
                    <img src="{{asset('img/map2.jpg')}}" alt="Ubicación del polideportivo" class="img-fluid h-100 w-100">
                </div>
                <div class="col-md-6 col-12 order-1 order-md-2">
                    <div class="contacto__datos">
                        <h2 class="text-dark mb-3">Contacta con nosotros</h2>
                        <p class="text-dark">¡Si tienes cualquier inquietud, quieres jugar o colaborar con nosotros no dudes en escribirnos o llamarnos!</p>
                        <div class="mt-4">
                            <p><strong>Teléfono:</strong> 656885285</p>
                            <p><strong>Email:</strong> dam10.2022.jesuitas@gmail.com
                            </p>
                            <p><strong>Instagram:</strong> ad_loyola</p>
                            <p><strong>Facebook:</strong> AD Loyola</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
