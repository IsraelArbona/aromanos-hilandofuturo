<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">
			<?php echo Form::myInput('text', 'id', '* Codigo', ['class' => 'form-control','id' => 'idd','maxlength' => '3']); ?>

			<?php echo Form::myInput('text', 'abrev', '* Abreviación', ['class' => 'form-control','maxlength' => '5']); ?>

			<?php echo Form::myInput('text', 'descripcion', '* Descripción', ['class' => 'form-control','maxlength' => '100']); ?>

			<?php echo Form::mySelect('tpdocumento', '* Tipo Documento', config('variables.tpdocumento'), null, ['class' => 'form-control','data-width' =>'100%',]); ?>

			
			<?php echo Form::hidden('user_id', Auth::user()->id); ?>

			<?php echo Form::hidden('sucursal_id', Auth::user()->sucursal_id); ?>

			
		</div>  
	</div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/sistemas/ddocumentos/partials/forme.blade.php ENDPATH**/ ?>