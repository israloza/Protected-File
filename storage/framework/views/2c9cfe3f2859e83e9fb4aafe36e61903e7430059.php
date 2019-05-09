<?php $__env->startSection('title','Modalidades Entrega'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-white text-center">Modalidad Entrega</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("ModalidadesEntrega/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Modalidad Entrega</th>
                <th>Descripción</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $ModalidadesEntrega; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ModalidadEntrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($ModalidadEntrega->id_modalidades_entregas); ?></td>
                        <td><?php echo e($ModalidadEntrega->descripcion); ?></td>
                        <td>
                            <a href="" class="btn btn-outline-primary" name="actualizar"><i class="fas fa-pen-alt"></i></a>
                        </td>
                        <td>
                            <form action="" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/ModalidadesEntrega/index.blade.php ENDPATH**/ ?>