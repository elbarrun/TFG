
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
    <form method="POST" class="justify-content-center" id="registrationForm" action="<?php echo e(url('register')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <p class="h1 mt-5 mb-4 text-center">Registro</p>


        <div class="row w-100 justify-content-center ms-1 mb-3">
            <div class="col-lg-3 col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
            </div>
        </div>

        <div class="row w-100  justify-content-center mb-3 ms-1">
            <div class="col-lg-3 col-md-6">
                <input type="email" name="email" class="form-control " id="" placeholder="Introduzca email">
            </div>
        </div>
        <div class="row w-100 justify-content-center mb-3 ms-1">
            <div class="col-lg-3 col-md-6">
                <input type="password" name="password" class="form-control" id="passwordField" placeholder="Introduzca contraseña">
            </div>
        </div>
        <div class="row w-100 justify-content-center mb-3 ms-1">
            <div class="col-lg-3 col-md-6">
                <input type="password" name="password_confirmation" class="form-control" id="confirmPasswordField" placeholder="Repita contraseña">
            </div>
        </div>

        <div class="row w-100 justify-content-center mb-3 ms-1">
            <div class="col-lg-3 col-md-6">
                <select id="team" class="form-select" name="team_id" required>
                    <option value="">Selecciona el equipo</option>
                    <?php $__currentLoopData = $equipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($equipo->id); ?>"><?php echo e($equipo->titulo); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="row w-100 justify-content-center mb-3 ms-1">
            <div class="col-lg-3 col-md-6">

                <select id="role" class="form-select" name="role" required>
                    <option value="">Selecciona el rol</option>
                    <option value="Entrenador">Entrenador</option>
                    <option value="Jugador">Jugador</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>
        </div>
        <!-- Role -->
        <div class="row justify-content-center mt-4 mb-3">
            <div class="col-3">
                <button type="submit" class="btn btn-primary" href="<?php echo e(url('/')); ?>">Registrarme</button>
            </div>
        </div>
        </div>
    </form>
</body></html>

<?php /**PATH C:\Users\ikero\PHPStorm\Workspace\ostias-copia\resources\views/auth/register.blade.php ENDPATH**/ ?>