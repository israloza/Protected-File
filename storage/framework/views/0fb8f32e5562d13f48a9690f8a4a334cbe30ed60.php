<?php $__env->startSection('title','Añadir Personas Físicas'); ?>
<?php $__env->startSection('content'); ?>

    <h1 class="bg-primary text-dark text-left">Añadir Personas Fisicas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("PersonasFisicas")); ?>">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo e(url("PersonasFisicas")); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="exampleInputPassword1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ap" placeholder="Apellido Paterno">
                    <label for="exampleInputPassword2">Apelllido Materno</label>
                    <input type="text" class="form-control" name="am" placeholder="Apellido Materno">
                    <label for="exampleInputPassword3">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">

                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ara/Documentos/Proyecto/Protected-File/resources/views/PersonasFisicas/create.blade.php ENDPATH**/ ?>