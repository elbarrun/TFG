
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
<div class="container-fluid">
<div class="gray-texts-section">
    <div class="container-fluid container-fluid-extra">
        <div class="gray-texts-section--4 gap-3 text-center">
            <div class="texts-container col-md-4 col-12">
                <div data-aos="flip-left"
                     data-aos-easing="ease-out-cubic"
                     data-aos-duration="2000">
                <div class="text-block">
                    <div class="title pb-2 text-white">Desde hace</div>
                    <div class="fact text-white">65 años</div>
                </div>
                </div>
            </div>

            <div class="texts-container col-md-4 col-12">
                <div data-aos="flip-left"
                     data-aos-easing="ease-out-cubic"
                     data-aos-duration="2000">
                <div class="text-block">
                    <div class="title pb-2 text-white">Más de</div>
                    <div class="fact text-white">300 niños</div>
                </div>
                </div>
            </div>

            <div class="texts-container col-md-4 col-12">
                <div data-aos="flip-left"
                     data-aos-easing="ease-out-cubic"
                     data-aos-duration="2000">
                <div class="text-block">
                    <div class="title pb-2 text-white">Entrenadores</div>
                    <div class="fact text-white">Titulados</div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div data-aos="fade-up"
     data-aos-duration="2000">

    <div class="carta-team mt-5" id="team">
        <div class="container-fluid">
            <div class="row d-flex flex-row align-items-start flex-column-reverse flex-md-row">

                <div class="col-12 col-md-4 order-first">
                    <h2 class="text-dark">Nuestros equipos</h2>
                    <p class="p-m">Nuestro club se enorgullece de tener equipos activos en todas las categorías. Desde los más jóvenes que están dando sus primeros pasos en el deporte, hasta los jugadores senior con años de experiencia, todos tienen un lugar en nuestro club. Creemos en el potencial de cada individuo y en el poder del juego en equipo. Aquí, no sólo enseñamos las habilidades técnicas del baloncesto, sino también los valores de respeto, deportividad y perseverancia.</p>
                    <a href="{{url('equipos')}}" class="btn btn-primary-lan carta-team text-white">Ver todos los equipos</a>
                </div>
                <div class="col-12 col-md-7 order-last">
                    <picture>
                        <img src="{{asset('img/segunda.jpg')}}" alt="Equipo con sus integrantes del segunda" class="img-fluid w-100 h-100">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>

<div data-aos="fade-up" data-aos-duration="2000">
    <div class="carta-team mt-5" id="team">
        <div class="container-fluid">
            <div class="row d-flex flex-row align-items-start flex-column-reverse flex-md-row">

                <div class="col-12 col-md-4 order-first order-md-last">
                    <h2 class="text-dark">Últimas noticias</h2>
                    <p class="p-m">Manténte al día con las últimas noticias de nuestro club. Aquí, cubrimos todo lo que necesitas saber sobre nuestro club y su progresión. Además, no te pierdas las entrevistas exclusivas con los jugadores, los análisis en profundidad de los partidos y las historias detrás de las escenas que sólo se pueden encontrar en nuestra sección de noticias. Sumérgete en la vida del club y mantente conectado con nosotros de una manera más personal. ¿Listo para estar al día? </p>
                    <a href="{{url('noticias')}}" class="btn btn-primary-lan carta-team text-white">Ver más noticias</a>
                </div>
                <div class="col-12 col-md-7 order-last order-md-first">
                    <picture>
                        <img src="{{asset('img/news.jpg')}}" alt="Un plato con cubiertos y a su derecha un chuletón" class="img-fluid w-100 h-100">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>
    <h1 class="text-center our-text mb-5 patrocinio" data-aos="slide-right">Nuestros Patrocinadores</h1>
    <div data-aos="fade-up"
         data-aos-duration="2000">

        <div class="row mt-5" mt-5>
            <div class="col-3 justify-content-center align-items-center">
                <img src="{{asset('img/codecar.jpg')}}" class="img-fluid slide-right">
            </div>
            <div class="col-3 justify-content-center align-items-center">
                <img src="{{asset('img/toten.jpg')}}" class="img-fluid">
            </div>
            <div class="col-3 justify-content-center align-items-center">
                <img src="{{asset('img/tornasol.jpg')}}" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="{{asset('img/frb.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>
</body>
<script>
    AOS.init();
</script>
<!-- Footer -->
@yield('content')

@include('layout.footer')
