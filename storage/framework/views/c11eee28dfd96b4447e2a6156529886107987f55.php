<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">
			<?php echo Form::myInput('text', 'nombre', '* Nombre', ['class' => 'form-control','maxlength' => '80']); ?>

			
			<?php echo Form::hidden('user_id', Auth::user()->id); ?>

			<?php echo Form::hidden('sucursal_id', Auth::user()->sucursal_id); ?>

			
		</div>  
	</div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/generals/marcas/partials/forme.blade.php ENDPATH**/ ?>