<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">

			<div class="form-row">	
				<div class="col-md-3">
					<?php echo Form::mySelect('ddocumento_id', '* Documento', $ddocumentos, null, ['class' => 'form-control','required']); ?>

				</div>
				<div class="col-md-9">
					<?php echo Form::myInput('text', 'descripcion', '* Descripción', ['class' => 'form-control','maxlength' => '191']); ?>

				</div>
			</div>

			<div class="form-row">	
				<div class="col-md-7">
					<?php echo Form::myInput('text', 'num_res', '* Num. Resolución', ['class' => 'form-control','maxlength' => '191']); ?>

				</div>
				<div class="col-md-5">
					<?php echo Form::myInput('text', 'fec_res', 'Fec. Resolución', ['class' => 'form-control date']); ?>

				</div>
			</div>

			<div class="form-row">
				<div class="col-md-3">
					<?php if(isset($fnumeracion->num_ini) > 0): ?>
						<?php echo Form::myInput('number', 'num_ini', 'Num. Inicial', ['class' => 'form-control num_ini','maxlength' => '10', 'min' => '0']); ?>

					<?php else: ?>
					    <?php echo Form::myInput('number', 'num_ini', 'Num. Inicial', ['class' => 'form-control num_ini','maxlength' => '10', 'min' => '0'],0); ?>

					<?php endif; ?>					
				</div>
				<div class="col-md-3">
					<?php if(isset($fnumeracion->num_fin) > 0): ?>
						<?php echo Form::myInput('number', 'num_fin', 'Num. Final', ['class' => 'form-control num_fin','maxlength' => '10', 'min' => '0']); ?>

					<?php else: ?>
					    <?php echo Form::myInput('number', 'num_fin', 'Num. Final', ['class' => 'form-control num_fin','maxlength' => '10', 'min' => '0'],0); ?>

					<?php endif; ?>	
				</div>
				<div class="col-md-3">
					<?php if(isset($fnumeracion->num_sig) > 0): ?>
						<?php echo Form::myInput('number', 'num_sig', 'Num. Siguente', ['class' => 'form-control num_sig','maxlength' => '10', 'min' => '0']); ?>

					<?php else: ?>
					    <?php echo Form::myInput('number', 'num_sig', 'Num. Siguente', ['class' => 'form-control num_sig','maxlength' => '10', 'min' => '0'],0); ?>

					<?php endif; ?>	
				</div>
				<div class="col-md-3">

					<?php if(isset($fnumeracion->estadot) > 0): ?>
					  <?php if(($fnumeracion->estadot == 0) and (Auth::user()->id > 1)): ?>
					    <?php echo Form::mySelect('estadot', 'Estado', config('variables.estadot'), null, ['class' => 'form-control','data-width' =>'100%','disabled']); ?>

					  <?php else: ?>
					    <?php echo Form::mySelect('estadot', 'Estado', config('variables.estadot'), null, ['class' => 'form-control','data-width' =>'100%']); ?>

					  <?php endif; ?>
					<?php else: ?>
					  <?php echo Form::mySelect('estadot', 'Estado', config('variables.estado'), null, ['class' => 'form-control','data-width' =>'100%']); ?>

					<?php endif; ?>
				</div>

			<?php echo Form::hidden('user_id', Auth::user()->id); ?>

			<?php echo Form::hidden('sucursal_id', Auth::user()->sucursal_id); ?>

			
			</div>

		</div>  
	</div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/sistemas/fnumeracions/partials/forme.blade.php ENDPATH**/ ?>