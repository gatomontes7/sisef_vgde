
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
                <div class="pagination justify-content-start mt-2">
                    <?php if($lugarplantacion->lastPage() > 1): ?>
                        <ul class="pagination justify-content-center page1-links">
                            <?php if(!($lugarplantacion->currentPage() == 1)): ?>
                                <li class="page-item prev">
                                    <a class="<?php echo e(($lugarplantacion->currentPage() == 1) ? ' ' : 'disabled'); ?> page-link"
                                       href="<?php echo e($lugarplantacion->url(1)); ?>">Atras</a>
                                </li>
                            <?php endif; ?>
                            <?php for($i = 1; $i <= $lugarplantacion->lastPage(); $i++): ?>
                                <li class="page-item <?php echo e(($lugarplantacion->currentPage() == $i) ? 'active' : ''); ?> ">
                                    <a class=" page-link <?php echo e(($lugarplantacion->currentPage() == $i) ? ' ' : 'disabled'); ?>"
                                       href="<?php echo e($lugarplantacion->url($i)); ?>"><?php echo e($i); ?></a>
                                </li>
                            <?php endfor; ?>
                            <?php if(!($lugarplantacion->currentPage() == $lugarplantacion->lastpage())): ?>
                                <li class="page-item next">
                                    <a class="page-link <?php echo e(($lugarplantacion->currentPage() == $lugarplantacion->lastpage()) ? ' ' : 'disabled'); ?>"
                                       href="<?php echo e($lugarplantacion->url($lugarplantacion->currentPage()+1)); ?>">Siguiente</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/confirmacion-eliminacion.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio.inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisef_vgde\resources\views/lugarplantacion/inicio.blade.php ENDPATH**/ ?>