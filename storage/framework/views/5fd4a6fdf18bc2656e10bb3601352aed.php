
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
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8"><div data-aos="fade-up">

            <h1 class="text-center mb-4">Crea tu noticia</h1></div>
            <form method="POST" action="<?php echo e(url('/')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input id="titulo" type="text" class="form-control" name="titulo" placeholder="Enter the title">
                </div>

                <div class="form-group mt-4">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" class="form-control" name="descripcion" cols="30" rows="5" placeholder="Describe tu noticia"></textarea>
                </div>

                <div class="form-group mt-3">
                    <label for="file"></label>
                    <input id="file" type="file" class="form-control" name="file">
                </div>

                <div class="form-group mt-4">
                    <button class="btn btn-primary btn-block">Guardar noticia</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html>
<script>
    AOS.init();
</script>
<?php /**PATH C:\Users\ikero\PHPStorm\Workspace\ostias-copia\resources\views/noticia/create_noticia.blade.php ENDPATH**/ ?>