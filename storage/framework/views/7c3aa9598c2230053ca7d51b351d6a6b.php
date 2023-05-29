<form action="<?php echo e(route('equipos.update', $equipo)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <style>
            .form-group {
                margin-bottom: 20px;
            }

            label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }

            input[type="text"],
            textarea {
                width: 100%;
                padding: 8px;
                font-size: 14px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            textarea {
                height: 150px;
            }

            button[type="submit"] {
                padding: 10px 20px;
                font-size: 16px;
                background-color: #036399;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            h2{
                text-align: center;
                color: #036399;
                text-transform: uppercase;
            }
        </style>

<h2>Edita tu equipo</h2>
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="<?php echo e($equipo->titulo); ?>" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" rows="8" required><?php echo e($equipo->descripcion); ?></textarea>
        </div>

        <div class="form-group">
            <label for="file">Imagen:</label>
            <input type="file" name="file" id="file">
        </div>

        <button type="submit">Guardar cambios</button>
    </form>

</form>
<?php /**PATH C:\Users\ikero\PHPStorm\Workspace\ostias-copia\resources\views/equipo/edit_equipo.blade.php ENDPATH**/ ?>