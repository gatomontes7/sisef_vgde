
<?php $__env->startSection('contenido'); ?>
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Plagas</h5>
                    </div>
                    <div class="col col-lg-10 ">
                        <a href="<?php echo e(url('lugarplantacion/create')); ?>" type="button"
                           class="btn btn-success btn-sm float-right">Nuevo</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Municipio</th>
                        <th>Zona</th>
                        <th>Latitud</th>
                        <th>Longitud</th>
                        <th style="width: 100px">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $lugarplantacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($data->municipio); ?></td>
                        <td><?php echo e($data->zona); ?></td>
                        <td><?php echo e($data->latitud); ?></td>
                        <td><?php echo e($data->longitud); ?></td>
                        <td>
                        <form id="eliminar<?php echo e($data->id); ?>" action="<?php echo e(url('/lugarplantacion/delete/'.$data->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <a href="<?php echo e(url('lugarplantacion/'.$data->id.'/edit')); ?>" class="btn btn-outline-warning btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button type="button" onclick="confirmEliminar(<?php echo e($data->id); ?>)" class="btn btn-outline-danger btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>                   
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/confirmacion-eliminacion.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisefvgde\resources\views/lugarplantacion/inicio.blade.php ENDPATH**/ ?>