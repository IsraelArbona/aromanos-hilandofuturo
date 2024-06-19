<?php $__env->startSection('pageheader'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="alert" style="display:none"></div>
  <div class="container">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
          <div class="card">
              <div class="card-header text-white bgc-orange-400">
                  <h4>
                    Productos <small class="text-white">(Nuevo Registro)</small>
                    <a href="<?php echo e(route('inventarios.inv_productos.index')); ?>"
                    class="btn btn btn-outline-light rounded-pill float-right" rel="tab">Volver</a>
                  </h4>
              </div>

              <div class="card-body">
                    <?php echo e(Form::open(['route' => 'inventarios.inv_productos.store', 'id' => 'sf_form','method' => 'post', 'action' => 'javascript:void(0)','files' => true])); ?>

                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('inventarios.inv_productos.partials.forme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <button type="submit" class="btn text-white bgc-orange-400 rounded-pill sf_guardar_file"
                        data-remote="<?php echo e(route('inventarios.inv_productos.store')); ?>">Guardar</button>
                   <?php echo Form::close(); ?>

              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script  type="text/javascript">

        $('.cbproveedor').select2({
            lang: 'es',
            placeholder: "SELECCIONAR PROVEEDOR",
            minimumInputLength: 1,
            multiple: false,
            tags: false,
            allowClear: true,
            ajax: {
                url: $('.cbproveedor').attr('data-url'),
                type: 'GET',
                dataType: 'json',
                processResults: function (data) {
                return {
                results:  $.map(data, function (item) {
                        return {
                            id:   item.id,
                            idt:  item.documento,
                            text: item.nombrec,
                        }
                    })
                };
                },
                cache: true
            },
            escapeMarkup: function (markup) { return markup; },
            templateResult: formatData,
            templateSelection: formatDataSelection,
        });

        function formatData (arr) {
        if (arr.loading) return arr.text;
            var markup = '<div clas="col-sm-12"><small><b>' + arr.text + '</b></small></div>';
            markup += '<div clas="col-sm-12"><span class="fa fa-info"></span> - ' + arr.idt + '</div>';
            return markup;
        }

        function formatDataSelection (arr) {
        return arr.text;
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // Asignamos el atributo src a la tag de imagen
                    $('#imagenpro').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // El listener va asignado al input
        $("#uploadedFile").change(function() {
            readURL(this);
        });


        function oinvproducto() {
            let pcosto = 0;
            let piva = 0;

            if ( (isNaN(parseFloat($('.cospro').val()))) ) {
                $("input[name='costo']").val(0);
                pcosto = parseFloat($("input[name='costo']").val());
            } else {
                pcosto = parseFloat($("input[name='costo']").val());
            }

            if ( (!isNaN(parseFloat($('.cospro').val()))) )  {

                if ( $("select[name='impuesto']").val() === '6' ) {
                    $("input[name='iva']").val(0);
                    $("input[name='precio']").val(pcosto);
                }

                if ( $("select[name='impuesto']").val() === '5' ) {
                    $("input[name='iva']").val(0);
                    $("input[name='precio']").val(pcosto);
                }

                if ( $("select[name='impuesto']").val() === 'C' ) {
                    piva = pcosto * 0.05;
                    $("input[name='iva']").val( piva );
                    $("input[name='precio']").val(pcosto + piva);
                }

                if ( $("select[name='impuesto']").val() === 'A' ) {
                    piva = pcosto * 0.19;
                    $("input[name='iva']").val( piva );
                    $("input[name='precio']").val(pcosto + piva);
                }

                if ( $("select[name='impuesto']").val() === '8' ) {
                    $("input[name='iva']").val(0);
                    $("input[name='precio']").val(pcosto);
                }

                if ( $("select[name='impuesto']").val() === '0' ) {
                    $("input[name='iva']").val(0);
                    $("input[name='precio']").val(pcosto);
                }

            }
        }

    </script>

<?php $__env->stopSection(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/inventarios/inv_productos/create.blade.php ENDPATH**/ ?>