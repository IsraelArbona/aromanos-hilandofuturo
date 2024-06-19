<li class="nav-item mT-30">
      <a href="">
          <span class="icon-holder">
              <i class="c-blue-500 fa fa-home fa-lg"></i>
          </span>
          <span class="title">Inicio</span>
      </a>
</li>

	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sistemas')): ?>
	  <?php echo $__env->make('partials.sub_menu_sistema', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('generals')): ?>
	  <?php echo $__env->make('partials.sub_menu_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('procesos')): ?>
	  <?php echo $__env->make('partials.sub_menu_proceso', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventarios')): ?>
	  <?php echo $__env->make('partials.sub_menu_inventarios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions')): ?>
	  <?php echo $__env->make('partials.sub_menu_factura', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contabilidads')): ?>
	  <?php echo $__env->make('partials.sub_menu_contabilidad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('infests')): ?>
	  <?php echo $__env->make('partials.sub_menu_infest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\xampp\htdocs\aromanos\resources\views/partials/menu.blade.php ENDPATH**/ ?>