<?php $__env->startSection('pageheader'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="alert" style="display:none"></div>
  <div class="container">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
          <div class="card">
              <div class="card-header text-white bgc-teal-400">
                  <h4>
                    Documentos <small class="text-white">(Nuevo Registro)</small>
                    <a href="<?php echo e(route('sistemas.ddocumentos.index')); ?>" 
                    class="btn btn btn-outline-light rounded-pill float-right" rel="tab">Volver</a>
                  </h4>
              </div>

              <div class="card-body">
                    <?php echo e(Form::open(['route' => 'sistemas.ddocumentos.store', 'id' => 'sf_form','method' => 'post', 'action' => 'javascript:void(0)'])); ?>

                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('sistemas.ddocumentos.partials.forme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <button type="submit" class="btn text-white bgc-teal-400 rounded-pill sf_guardar" 
                        data-remote="<?php echo e(route('sistemas.ddocumentos.store')); ?>">Guardar</button>
                   <?php echo Form::close(); ?>

              </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/sistemas/ddocumentos/create.blade.php ENDPATH**/ ?>