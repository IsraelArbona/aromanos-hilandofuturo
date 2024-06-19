<?php $__env->startSection('pageheader'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="alert" style="display:none"></div>
  <div class="container">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
          <div class="card">
              <div class="card-header text-white bgc-indigo-400">
                  <h4>
                    Marcas <small class="text-white">(Editar Registro)</small>
                    <a href="<?php echo e(route('generals.marcas.index')); ?>" 
                    class="btn btn btn-outline-light rounded-pill float-right" rel="tab">Volver</a>
                  </h4>
              </div>

              <div class="card-body">
                     <?php echo Form::model($marca,['route' => ['generals.marcas.update', $marca->id], 'id' => 'sf_form', 'action' => 'javascript:void(0)']); ?>

                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('generals.marcas.partials.forme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <button type="submit" class="btn text-white bgc-indigo-400 rounded-pill sf_editar" 
                        data-remote="<?php echo e(route('generals.marcas.update', $marca->id)); ?>">Guardar</button>
                <?php echo Form::close(); ?>

              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>   
<?php $__env->stopSection(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/generals/marcas/edit.blade.php ENDPATH**/ ?>