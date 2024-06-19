<?php $__env->startSection('pageheader'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="alert" style="display:none"></div>
  <div class="container">
      <div class="bgc-white bd bdrs-3 p-4 mB-4">
          <div class="card">
              <div class="card-header text-white bgc-pink-400">
                  <h4>
                    Factura Ventas <small class="text-white">(Editar)</small>
                    <a href="<?php echo e(route('facturacions.inv_facturaventas.index',[date('Y-m-d'),date('Y-m-d')])); ?>"
                    class="btn btn btn-outline-light rounded-pill float-right" rel="tab">Volver</a>
                  </h4>
              </div>


              <div class="card-body p-4 mB-4">
                    <?php echo Form::model($inv_facturaventa,['route' => ['facturacions.inv_facturaventas.update', $inv_facturaventa->id],
                    'id' => 'sf_form', 'action' => 'javascript:void(0)']); ?>

                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('facturacions.inv_facturaventas.partials.forme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo Form::close(); ?>


                <div class="row mB-4">
                  <div class="col-sm-12">
                      <h3 class="c-pink-400">
                        Detalles Ventas
                      </h3>
                  </div>
                </div>

                <div class="row mB-4">
                  <div class="col-sm-12">
                    <div class="bgc-white p-4 bd">

                            <table id="tdatajs" class="display compact table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th width="50px">Cantidad</th>
                                        <th>Precio</th>
                                        <th>SubTotal</th>
                                        <th width="50px">Imp.</th>
                                        <th>Tot. Iva</th>
                                        <th>Total</th>
                                        <th width="50px">Acción</th>
                                    </tr>
                                </thead>
                            </table>

                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script defer type="text/javascript">

  //facturaSubVC = parseFloat($("input[name='subtotal']").val());
  //facturaIvaVC = parseFloat($("input[name='iva']").val());

  var eleEDIT = document.getElementById("sf_editar_facturaVC");

  recargar();

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
        if (arr.textd !== undefined){
            $("input[name='descripcion']").val(arr.textd + ' (' + arr.textci + ')');
        }
        return arr.text;
    }

    $('.cbinvpro').select2({
      lang: 'es',
      placeholder: "SELECCIONAR PRODUCTO",
      minimumInputLength: 1,
      allowClear: true,
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
                    idt:  item.nombrep,
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
      templateResult: formatDatadd,
      templateSelection: formatDataSelectiondd,
    });

    function formatDatadd (arr) {
      if (arr.loading) return arr.text;
        var markup = '<div clas="col-sm-12"><small><b>' + arr.text + '</b></small></div>';
        markup += '<div clas="col-sm-12"><span class="fa fa-info"></span> - ' + arr.idt + '</div>';
        return markup;
    }

    function formatDataSelectiondd (arr) {
        $("input[name='existencia']").val(arr.idc);
        $("input[name='lote']").val(arr.idl);
        $("input[name='estante']").val(arr.ide);
        $("input[name='base']").val(arr.idco);
        $("input[name='subiva']").val(arr.idi);
        openproducto();
        return arr.text;
    }

  $('.sf_editar_facturaVC').click(function(e){
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
        data: $('#sf_form').serialize(),
        method: 'put',

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
              $('.cbinvpro').empty().append(new Option()).trigger('change');

              $("input[name='totald']").val(0);

              $("input[name='subtotal']").val(data.facv_sub);
              $("input[name='iva']").val(data.facv_iva);
              $("input[name='total']").val(data.facv_sub + data.facv_iva);
              recargar();
            }

            setTimeout(function(){
                $('.alert').hide();
              },2500);
       });

  });

  function recargar() {

    $("#tdatajs").dataTable().fnDestroy();
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });


    $('#tdatajs').DataTable({
        "serverSide": true,
        "responsive": true,
        "deferRender":true,
        "ajax": {
          "url": "<?php echo e(route('facturacions.inv_facturaventas.dtCargarInvfacturaventaDets', $inv_facturaventa->id)); ?>",
          "type": "post",
        },
        "columns": columna = [
                {data: 'nombrep'},
                {data: 'cantidad'},
                {data: 'base'},
                {data: 'subtotal'},
                {data: 'impuesto'},
                {data: 'subiva'},
                {data: 'total'},
                {data: 'action', orderable: false, searchable: false},
        ],
        "dom": "",
        "language": {
          "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar _MENU_ registros",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla",
          "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix":    "",
          "sSearch":         "Buscar:",
          "sUrl":            "",
          "sInfoThousands":  ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
          },
          "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          },
          "buttons": {
            "pageLength": {
              _: "Mostrar %d Registros",
            }
          }
        },
         "aLengthMenu": [[15, 30, 100], [15, 30, 100]],
        aaSorting: []
    });
  }

    function openproducto() {
        let totaldet = 0;
        let total = 0;
        let totaliva = 0;
        let totaltotal = 0;
        let contar = 0;
        let descuen = 0;

        if ( (isNaN(parseFloat($('.vdes').val()))) ) {
            $("input[name='descuento']").val(0);
            descuen = parseFloat($("input[name='descuento']").val());
        } else {
            descuen = parseFloat($("input[name='descuento']").val());
        }

        if ( (!isNaN(parseFloat($('.cbinvpro').val()))) && (!isNaN(parseFloat($('.cant').val()))) && (!isNaN(parseFloat($('.exis').val()))) ) {

            contar = ( parseFloat($('.exis').val()) - parseFloat($('.cant').val()) );

            if ( contar < 0 ) {
                $('.alert').addClass('alert-danger');
                $('.alert-danger').show();
                $('.alert-danger').html('<p> El cantidad no puede ser mayor al numero de existencias </p>');
                $("select[name='cantidad']").val(1);
                total = 1 * parseFloat($('.unit').val()) ;

                $('.sf_editar_facturaVC').prop('disabled', true);

                setTimeout(function(){
                    $('.alert-danger').hide();
                    },5000);
            } else {

                $('.sf_editar_facturaVC').prop('disabled', false);

                totaldet = parseFloat( $('.cant').val()) * ( parseFloat($('.basepr').val()) + parseFloat($('.ivapr').val()) );
                total = parseFloat( $('.cant').val()) * parseFloat($('.basepr').val());
                totaliva = ($('.cant').val() * parseFloat($('.ivapr').val() )) ;


                $("input[name='totald']").val(totaldet);
                //total += facturaSubVC;
                //totaliva += facturaIvaVC;

                //totaltotal = (total + totaliva);

                //$("input[name='subtotal']").val(total);
                //$("input[name='iva']").val(totaliva);
                //$("input[name='total']").val(totaltotal - descuen);

                //alert("ingreso");

            }

        }



        if (totaltotal < descuen) {
            $('.alert').addClass('alert-danger');
            $('.alert-danger').show();
            $('.alert-danger').html('<p> El descuento no puede ser mayor al total factura de venta. </p>');
            $("input[name='descuento']").val(0);
                setTimeout(function(){
                    $('.alert-danger').hide();
                },5000);
        }



    }

</script>
<?php $__env->stopSection(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/facturacions/inv_facturaventas/edit.blade.php ENDPATH**/ ?>