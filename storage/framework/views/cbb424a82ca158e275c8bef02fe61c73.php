
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
        <div class="row mt-5">
            <?php $__currentLoopData = $tacticas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tactic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card-tactica ">
                        <h5 class="text-center"><?php echo e($tactic->titulo); ?></h5>
                        <img src="<?php echo e(asset('storage/tacticas/' . $tactic->file)); ?>" class="card-img-top img-fluid mw-100" alt="Descripción de la imagen">
                        <div class="card-body ms-3">
                            <p class="card-text"><?php echo e($tactic->descripcion); ?></p>
                            <?php if(Auth::check() && (Auth::user()->hasRole('Admin') || (Auth::user()->hasRole('Entrenador') && Auth::id() == $tactic->user_id)) ): ?>
                                <a href="<?php echo e(route('tacticas.edit', $tactic)); ?>" class="btn btn-primary">Editar</a>
                                <form method="POST" action="<?php echo e(route('tacticas.destroy', $tactic)); ?>" style="display: inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger ">Eliminar</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
    <?php if(Auth::check() && !Auth::user()->hasRole('Jugador')): ?>
        <a href="<?php echo e(route('tacticas.create')); ?>" class="btn btn-success">Crear Táctica</a>
    <?php endif; ?>

<div class="comments-container">
    <h2>Comentarios</h2>

    <ul class="comment-list" id="comment-list">
        <!-- Aquí se mostrarán los comentarios -->
    </ul>

    <div class="comment-form">
        <h4>Deja un comentario:</h4>
        <form id="comment-form">
            <div class="form-group">
                <input type="text" class="form-control" id="author" placeholder="Tu nombre">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="content" placeholder="Tu comentario"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</body></html>
<script src="<?php echo e(asset('js/index.js')); ?>"></script>

<script>
    AOS.init();
</script>
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\ikero\PHPStorm\Workspace\ostias-copia\resources\views/tactica/show_tactica.blade.php ENDPATH**/ ?>