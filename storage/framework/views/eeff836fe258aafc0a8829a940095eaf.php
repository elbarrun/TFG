
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
    <form method="POST" action="<?php echo e(url('login')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="c__login_coach">
            <div class="container log_coach bg-white p-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center mb-4">
                        <h3 class="text-uppercase">¡Bienvenido coach! </h3>
                        <h4 class="my-3">Forma y se feliz...</h4>

                    </div>
                    <div class="col-md-12 col-lg-6 mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Usuario">
                    </div>
                    <div class="col-md-12 col-lg-6 mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary" href="<?php echo e(url('/')); ?>">Acceder como entrenador</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php /**PATH C:\Users\ikero\PHPStorm\Workspace\ostias-copia\resources\views/auth/login_coach.blade.php ENDPATH**/ ?>