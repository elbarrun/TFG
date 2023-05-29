
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
<div class="c__hero">
    <h1>Bienvenido a la página oficial del Loyola</h1>
</div>
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <div class="contacto-adl contacto mt-5">
        <div class="container-fluid">
            <div class="row d-flex-align-items-center">
                <div class="col-md-6 col-12 order-2 order-md-1">
                    <img src="<?php echo e(asset('img/map2.jpg')); ?>" alt="Ubicación del polideportivo" class="img-fluid h-100 w-100">
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

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body></html>
<?php /**PATH C:\Users\ikero\PHPStorm\Workspace\ostias-copia\resources\views/layout/contacto.blade.php ENDPATH**/ ?>