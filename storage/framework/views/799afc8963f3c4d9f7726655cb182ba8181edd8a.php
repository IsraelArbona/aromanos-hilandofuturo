<?php $__env->startSection('pageheader'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="alert" style="display:none"></div>
  <div class="container">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
          <div class="card">
              <div class="card-header text-white bgc-teal-400">
                  <h4>
                    Numeración <small class="text-white">(Nuevo Registro)</small>
                    <a href="<?php echo e(route('sistemas.fnumeracions.index')); ?>" 
                    class="btn btn btn-outline-light rounded-pill float-right" rel="tab">Volver</a>
                  </h4>
              </div>

              <div class="card-body">
                    <?php echo e(Form::open(['route' => 'sistemas.fnumeracions.store', 'id' => 'sf_form','method' => 'post', 'action' => 'javascript:void(0)'])); ?>

                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('sistemas.fnumeracions.partials.forme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <button type="submit" class="btn text-white bgc-teal-400 rounded-pill sf_guardar" 
                        data-remote="<?php echo e(route('sistemas.fnumeracions.store')); ?>">Guardar</button>
                   <?php echo Form::close(); ?>

              </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script  type="text/javascript"> 
 
  $.datetimepicker.setLocale('es');
  var $n_ini = $('.num_ini').val();

  $('.date').datetimepicker({
  timepicker:false,
  format:'Y-m-d'
  }).attr('autocomplete', "off");


  $('.num_ini').on("change", function () {
     $(this).val();
  });

  $('.num_fin').on("change", function (e) {
    var _this = $(this);
    e.preventDefault();

    if (parseInt($(this).val()) < parseInt($('.num_ini').val())) {
      $('.alert').addClass('alert-danger');
      $('.alert').show();
      $('.alert').html('<p> La numeración final no puede ser menor a la inicial </p>');
      $(this).focus();
      $(this).val(0); 

      setTimeout(function(){
        $('.alert').hide();
      },2500);
    }
  });

  $('.num_sig').on("change", function (e) {
    var _this = $(this);
    e.preventDefault();

    if (parseInt($(this).val()) < parseInt($('.num_ini').val())) {
      $('.alert').addClass('alert-danger');
      $('.alert').show();
      $('.alert').html('<p> La numeración siguiente no puede ser menor a la numeración inicial </p>');
      $(this).focus();
      $(this).val(0); 

      setTimeout(function(){
        $('.alert').hide();
      },2500);
    }

    if (parseInt($(this).val()) > parseInt($('.num_fin').val())) {
      $('.alert').addClass('alert-danger');
      $('.alert').show();
      $('.alert').html('<p> La numeración siguiente no puede ser mayor a la final </p>');
      $(this).focus();
      $(this).val(0); 

      setTimeout(function(){
        $('.alert').hide();
      },2500);
    }

  });

</script>    
<?php $__env->stopSection(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/sistemas/fnumeracions/create.blade.php ENDPATH**/ ?>