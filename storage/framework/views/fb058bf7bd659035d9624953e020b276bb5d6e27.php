<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">
			<?php echo Form::myInput('text', 'nombre', '* Nombre', ['class' => 'form-control','maxlength' => '80']); ?>

			<?php echo Form::myInput('text', 'descripcion', '* Descripción', ['class' => 'form-control','maxlength' => '100']); ?>


            <?php if(isset($inv_bodega->lotes) > 0): ?>
                <?php echo Form::myRange('lotes','* Lotes',1, 999, $inv_bodega->lotes, ['class' => 'form-control']); ?>

			<?php else: ?>
                <?php echo Form::myRange('lotes','* Lotes',1, 999, 1, ['class' => 'form-control']); ?>

			<?php endif; ?>

            <?php if(isset($inv_bodega->estantes) > 0): ?>
                <?php echo Form::myRange('estantes','* Estantes',1, 999, $inv_bodega->estantes, ['class' => 'form-control']); ?>

			<?php else: ?>
                <?php echo Form::myRange('estantes','* Estantes',1, 999, 1, ['class' => 'form-control']); ?>

			<?php endif; ?>


            <?php if(isset($inv_bodega->estadot) > 0): ?>
                <?php if(($inv_bodega->estadot == 0) and (Auth::user()->id > 1)): ?>
                <?php echo Form::mySelect('estadot', 'Estado', config('variables.estadot'), null, ['class' => 'form-control','data-width' =>'100%','disabled']); ?>

                <?php else: ?>
                <?php echo Form::mySelect('estadot', 'Estado', config('variables.estadot'), null, ['class' => 'form-control','data-width' =>'100%']); ?>

                <?php endif; ?>
            <?php else: ?>
                <?php echo Form::mySelect('estadot', 'Estado', config('variables.estado'), null, ['class' => 'form-control','data-width' =>'100%']); ?>

            <?php endif; ?>

			<?php echo Form::hidden('user_id', Auth::user()->id); ?>

			<?php echo Form::hidden('sucursal_id', Auth::user()->sucursal_id); ?>


		</div>
	</div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/inventarios/inv_bodegas/partials/forme.blade.php ENDPATH**/ ?>