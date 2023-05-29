
<!DOCTYPE html>
<html>
<head>
    <title>AD.Loyola</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>" />
    <script src="<?php echo e(asset('js/index.js')); ?>"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('storage/favicon.ico')); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</head>
<body>



<div class="c__menu">
    <nav class="navbar navbar-expand-lg w-100">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-around">
                <li class="nav-item">
                    <a class="nav-link our-text" href="<?php echo e(url('/')); ?>">Inicio</a>
                </li>
                <?php if(Auth::check()): ?>
                <li class="nav-item">
                    <a class="nav-link our-text" href="<?php echo e(url('tacticas')); ?>">Tácticas</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link our-text" href="<?php echo e(url('noticias')); ?>">Noticias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link our-text" href=<?php echo e(url('equipos')); ?>>Equipos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link our-text" href=<?php echo e(url('contacto')); ?>>Contacto</a>
                </li>
                <?php if(Auth::check()): ?>
                <li class="nav-item justify-content-end">
                    <a class="nav-link " aria-current="page" style="color: red;">Bienvenido, <?= Auth::user()->name;?></a>
                </li>

                <li class="nav-item me-2">
                    <form action="<?php echo e(url('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button class="nav-link btn" aria-current="page" type="submit">Cerrar sesión</button>
                    </form>
                </li>

                <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link our-text" href="<?php echo e(url('login')); ?>">Acceder</a>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </nav>
</div>

</body>
</html>

<!--PROHIBIDO TOCAR-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"

        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"
></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<?php /**PATH C:\Users\ikero\PHPStorm\Workspace\ostias-copia\resources\views/layout/menu.blade.php ENDPATH**/ ?>