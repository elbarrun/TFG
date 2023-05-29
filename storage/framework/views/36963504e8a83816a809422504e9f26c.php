
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
    <div class="row">

        <?php $__currentLoopData = $equipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-12 col-lg-8 mb-4"  data-aos="fade-right"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="card-equipo d-flex flex-column-reverse flex-lg-row">
                    <div class="row g-0">

                        <div class="col-12 col-lg-8">
                            <img src="<?php echo e(asset('storage/equipos/' . $equipo->file)); ?>" class="img-fluid w-100" alt="card-horizontal-image">
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card-body mb-3">
                                <p class="card-text ms-5">Jugadores:</p>
                                <ul>
                                    <?php $__currentLoopData = $equipo->user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jugador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($jugador->name); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <h5 class="card-title my-3 text-center text-uppercase ms-5"><?php echo e($equipo->titulo); ?></h5>
                                <p class="card-text ms-5"><?php echo e($equipo->descripcion); ?> </p>
                                <?php if(Auth::check() && Auth::user()->hasRole('Admin')): ?>
                                    <div class="mb-3 ms-3">
                                        <a href="<?php echo e(route('equipos.edit', $equipo)); ?>" class="btn btn-primary">Editar</a>
                                        <form method="POST" action="<?php echo e(route('equipos.destroy', $equipo)); ?>" style="display: inline-block">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if(Auth::check() && Auth::user()->hasRole('Admin')): ?>
        <a href="<?php echo e(route('equipos.create')); ?>" class="btn btn-success">Crear equipo</a>
    <?php endif; ?>
</div>


</body>
</html>
<script>
    AOS.init();
</script>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\ikero\PHPStorm\Workspace\ostias-copia\resources\views/equipo/show_equipo.blade.php ENDPATH**/ ?>