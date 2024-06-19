<?php $__env->startSection('pageheader'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="alert" style="display:none"></div>
  <div class="container">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
          <div class="card">
              <div class="card-header text-white bgc-pink-400">
                  <h4>
                    Factura Compra <small class="text-white">(Nuevo Registro)</small>
                    <a href="<?php echo e(route('facturacions.inv_facturacompras.index',[date('Y-m-d'),date('Y-m-d')])); ?>"
                    class="btn btn btn-outline-light rounded-pill float-right" rel="tab">Volver</a>
                  </h4>
              </div>

              <div class="card-body">
                    <?php echo e(Form::open(['route' => 'facturacions.inv_facturacompras.store', 'id' => 'sf_form','method' => 'post', 'action' => 'javascript:void(0)'])); ?>

                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('facturacions.inv_facturacompras.partials.forme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                   <?php echo Form::close(); ?>

              </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<script  type="text/javascript">

   facturaSubVC = parseFloat($("input[name='subtotal']").val());

   $('.cbpersona').select2({
      lang: 'es',
      // placeholder: "",
      minimumInputLength: 1,
      multiple: false,
      tags: false,
      ajax: {
        url: $('.cbpersona').attr('data-url'),
        type: 'GET',
        dataType: 'json',
        processResults: function (data) {
          return {
          results:  $.map(data, function (item) {
                return {
                    id:   item.id,
                    idt:  item.documento,
                    text: item.nombrec,
                    textd: item.direcion,
                    textci : item.nombreci,
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
        markup += '<div clas="col-sm-12"><span class="fa fa-info"></span> - ' + arr.textd + ' (' + arr.textci + ')' + '</div>';
        return markup;
    }

    function formatDataSelection (arr) {
        $("input[name='descripcion']").val(arr.textd + ' (' + arr.textci + ')');
        return arr.text;
    }

    $('.cbinvpro').select2({
      lang: 'es',
      // placeholder: "",
      minimumInputLength: 1,
      multiple: false,
      tags: false,
      ajax: {
        url: $('.cbinvpro').attr('data-url'),
        type: 'GET',
        dataType: 'json',
        processResults: function (data) {
          return {
          results:  $.map(data, function (item) {
                return {
                    id:   item.id,
                    idt:  item.nombreb,
                    idc:  item.cantidad,
                    idl:  item.lote,
                    ide:  item.estante,
                    idco: item.precio,
                    idi:  item.ivap,
                    text: item.nombrep,
                }
            })
          };
        },
        cache: true
      },
      escapeMarkup: function (markup) { return markup; },
      templateResult: formatData,
      templateSelection: formatDataSelectiondd,
    });

    function formatDataSelectiondd (arr) {
      $("input[name='existencia']").val(arr.idc);
      $("input[name='lote']").val(arr.idl);
      $("input[name='estante']").val(arr.ide);
      $("input[name='base']").val(arr.idco);
      $("input[name='subiva']").val(arr.idi);
      openproducto();
      return arr.text;
    }

$('.sf_guardar_facturaVC').click(function(e){
      e.preventDefault();

      var urls = $(this).data('remote');
      $('.alert').html('');

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
     });
     $.ajax({
        url: urls,
        method: 'post',
        data: $('#sf_form').serialize(),
        success: function(data){
              $.each(data.errors, function(key, value){
                $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
                $('.alert').addClass('alert-danger');
                $('.alert').show();
                $('.alert').append('<p>'+value+'</p>');
              });
          }
        }).done(function(data){
          if (data.success){
              $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
              $('.alert').addClass('alert-success');
              $('.alert').show();
              $('.alert').html('<p>'+data.success+'</p>');
              recargar(data.id_fc);
            }

            setTimeout(function(){
                $('.alert').hide();
              },2500);
       });

});

  function recargar(iddfv) {
    var urls = "";

      urls = "<?php echo e(route('facturacions.inv_facturacompras.edit', ':rid')); ?>";
      urls = urls.replace(':rid', iddfv);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
     });
     $.ajax({
        url: urls,
        method: 'get',
        success:function(data){

      $('.ajax-content').html('');
      var data = $.parseJSON(data);
      var cade = '';
      cade += data.pageheader;
      cade += data.content;
      cade += data.js;
      $('.ajax-content').html(cade);
    }
     });
  }

  function openproducto() {
    let totaldet = 0;
    let total = 0;
    let totaliva = 0;
    let totaltotal = 0;
    // let contar = 0;
    let descuen = 0;

    if ( (isNaN(parseFloat($('.vdes').val()))) ) {
        $("input[name='descuento']").val(0);
        descuen = parseFloat($("input[name='descuento']").val());
    } else {
        descuen = parseFloat($("input[name='descuento']").val());
    }

    if ( (!isNaN(parseFloat($('.cbinvpro').val()))) && (!isNaN(parseFloat($('.cant').val()))) ) {

            $('.sf_guardar_facturaVC').prop('disabled', false);
            totaldet = parseFloat( $('.cant').val()) * ( parseFloat($('.basepr').val()) + parseFloat($('.ivapr').val()) );
            total = parseFloat( $('.cant').val()) * parseFloat($('.basepr').val());

    }

    $("input[name='totald']").val(totaldet);

    total += facturaSubVC;
    totaliva = ( $('.cant').val()) * parseFloat($('.ivapr').val() );
    totaltotal = (total + totaliva);

    if (totaltotal < descuen) {
        $('.alert').addClass('alert-danger');
        $('.alert-danger').show();
        $('.alert-danger').html('<p> El descuento no puede ser mayor al total factura de compra. </p>');
        $("input[name='descuento']").val(0);
            setTimeout(function(){
                $('.alert-danger').hide();
              },5000);
    }

    $("input[name='subtotal']").val(total);
    $("input[name='iva']").val(totaliva);
    $("input[name='total']").val(totaltotal - descuen);


  }

</script>
<?php $__env->stopSection(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/facturacions/inv_facturacompras/create.blade.php ENDPATH**/ ?>