
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


<div class="container-fluid">


    <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div data-aos="fade-down"
             data-aos-easing="linear"
             data-aos-duration="1000">
        <div class="card-loyola col-lg-6 col-sm-12 mt-5">
            <h2 class="text-start"><?php echo e($noticia->titulo); ?></h2>
            <div class="img-container">
                <img src="<?php echo e(asset('storage/noticias/' . $noticia->file)); ?>" alt="Descripción de la imagen" class="my-3" />
            </div>
            <p class="text-start mt-4">
                <?php echo e($noticia->descripcion); ?>

            </p>

            <?php if(Auth::check() && (Auth::user()->hasRole('Admin')||(Auth::user()->hasRole('Entrenador') && Auth::id()== $noticia->user_id)) ): ?>
                <a href="<?php echo e(route('noticia.edit', $noticia)); ?>" class="btn btn-primary mb-2">Editar</a>
                <form method="POST" action="<?php echo e(route('noticia.destroy', $noticia)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
</body>

<!-- Footer -->


</html>


<?php if(Auth::check() && !Auth::user()->hasRole('Jugador')): ?>
    <a href="<?php echo e(route('noticia.create')); ?>" class="btn btn-success">Crear Noticia</a>
<?php endif; ?>
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    AOS.init();
</script>
<?php /**PATH C:\Users\ikero\PHPStorm\Workspace\ostias-copia\resources\views/noticia/show_noticia.blade.php ENDPATH**/ ?>