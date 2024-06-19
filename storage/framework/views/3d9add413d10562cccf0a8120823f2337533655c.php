<?php $__env->startSection('pageheader'); ?>

<div class="row mB-40">
  <div class="col-sm-12">

    <nav class="navbar navbar-expand-md navbar-light">

      <h4 class="c-grey-900">
        Facturas <small>(Lista)</small>
      </h4>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a id="ades" href="javascript:void(0)" class="btn disabled nav-link bbou-pink-400 rounded-pill" rel="tab">
              <?php echo e(trans('app.add_button')); ?>

            </a>
          </li>

          <li class="nav-item dropdown">
            <a id="adesi" class="btn disabled nav-link dropdown-toggle bbou-pink-400 rounded-pill" href="javascript:void(0)" id="navbarDropdownMenuLink"
            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 10px !important;">
              Informes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a id="adesidetalle" class="dropdown-item" href="#">Informe Detallado</a>
              <!--
                <a id="adesi2" class="dropdown-item" href="#">Informe Totales</a>
              -->
              <a id="adesisubsidio" class="dropdown-item" href="#" target="_blank">Informe Subsidio</a>
              <a id="adesisubsidiodet" class="dropdown-item" href="#" target="_blank">Informe Subsidio Det.</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a id="adesconta" class="btn disabled nav-link dropdown-toggle bbou-pink-400 rounded-pill" href="javascript:void(0)" id="navbarDropdownMenuLink"
            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 10px !important;">
              Contabilidad
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a id="adesconta1" class="dropdown-item" href="#">Causación</a>
                <a id="adesconta2" class="dropdown-item" href="#">Recaudo</a>
            </div>
          </li>

          <li class="nav-item">
            <a id="adesc" class="btn disabled nav-link bbou-pink-400 rounded-pill" data-toggle="modal"  data-target="#panel-pdf">
              Guardar PDF
            </a>
          </li>

          <li class="nav-item">
            <a id="adesf" href="<?php echo e(route('facturacions.facturas.facturasGen')); ?>" class="btn nav-link bbou-pink-400 rounded-pill">
              Generar FAC
            </a>
          </li>

        </ul>
      </div>

    </nav>

    <div class="form-row">
      <div class="col-md-12">
          <?php echo Form::mySelect('datos', null, $periodos, null, ['class' => 'form-control cbperiodo', 'data-url' => route('home.sBuscarPeriodos'),'data-width' =>'100%','required']); ?>

      </div>
    </div>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <!-- Modal -->
    <div class="modal fade" id="panel-pdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header text-white bgc-pink-400">
            <h5 class="modal-title" id="exampleModalLongTitle">Configuración Pdf</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="row mB-10">
                <div class="col-sm-12">
                  <div class="bgc-white p-20 bd">
                    <div class="form-row">
                    <!--
                      <div class="col-md-12">
                        <label>
                          <?php echo Form::checkbox('direcciones', 0, null, ['id' => 'direcciones']); ?>

                          <em>Impresión por Direcciones General</em>
                        </label>
                      </div>
                    -->
                      <div class="col-md-12">
                        <label>
                          <?php echo Form::checkbox('general', 0, true, ['id' => 'general']); ?>

                          <em>Impresión General</em>
                        </label>
                      </div>

                      <div class="col-md-12">
                        <label>
                          <?php echo Form::checkbox('rutas', 0, null, ['id' => 'rutas']); ?>

                          <em>Impresión por Rutas Especificas</em>
                        </label>
                      </div>

                      <div class="col-md-12">
                        <?php echo Form::mySelect('ruta_id', '', $rutas, null, ['class' => 'form-control cbruta', 'data-url' => route('home.sBuscarRutas'),
                        'data-width' =>'100%','disabled']); ?>

                      </div>

                      <div class="col-md-12">
                        <?php echo Form::myInput('number', 'facinicial', '* Fac. Inicial', ['class' => 'form-control','maxlength' => '10']); ?>

                      </div>
                      <div class="col-md-12">
                        <?php echo Form::myInput('number', 'facfinal', '* Fac. Final', ['class' => 'form-control','maxlength' => '10']); ?>

                      </div>
                      <div class="col-md-12">
                        <?php echo Form::myRange('intervalo','* Intervalo',20, 100, 50, ['class' => 'form-control']); ?>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <small>Maximo 100 facturas en el navegador</small>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn text-white bgc-pink-400 rounded-pill" name="generarpdf" id="generarpdf">Guardar</button>
          </div>
        </div>
      </div>
    </div>



    <div class="alert" style="display:none"></div>
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="tdatajs" class="display compact table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="20px">Id</th>
                    <th width="20px">Cod. Predio</th>
                    <th width="20px">Nro. Documento</th>
                    <th>Suscriptor</th>
                    <th>Total</th>
                    <th>Atrasos</th>
                    <th>Estado</th>
                    <th width="140px">Acción</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="4" style="text-align:right">SubTotal:</th>
                    <th ></th>
                    <th colspan="3"></th>
                </tr>
            </tfoot>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
  <script defer type="text/javascript">


    $(document).ready(function(){

        var arrcb = [];
        var element = document.getElementById("ades"), elementc = document.getElementById("adesc"),
        elementi = document.getElementById("adesi"), elementidetalle = document.getElementById("adesidetalle"),
        elementisubsidio = document.getElementById("adesisubsidio"),
        elementisubsidiodet = document.getElementById("adesisubsidiodet"),
        elementconta = document.getElementById("adesconta");

        var urls = "",urlp = "", urlex = "", urlidetalle = ""; urlisubsidio = ""; urlisubsidiodet = "";
        var urlpt = "", ttotal = "", fini = "", ffin = "";

        $('.cbperiodo').select2({
          language: 'es',
          // placeholder: "",
          minimumInputLength: 1,
          multiple: false,
          tags: false,
          ajax: {
            url: $('.cbperiodo').attr('data-url'),
            type: 'GET',
            dataType: 'json',
            processResults: function (data) {
              return {
                results:  $.map(data, function (item) {
                    return {
                        text: item.descripcionc,
                        id: item.id
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
            markup += '<div clas="col-sm-12"><span class="fa fa-info"></span> - ' + arr.id + '</div>';
          return markup;
        }

        function formatDataSelection (arr) {

          arrcb= arr;
          urls = "<?php echo e(route('facturacions.facturas.dtCargarFacturas', ':idd')); ?>";
          urls = urls.replace(':idd', arr.id);

          urlp = "<?php echo e(route('facturacions.facturas.create', ['p_id' => ':id','p_de' => ':text'])); ?>";
          urlp = urlp.replace(':id', arr.id);
          urlp = urlp.replace(':text', arr.text);
          // element.classList.remove("disabled");
          element.href = urlp;

          urlpt = "<?php echo e(route('facturacions.facturas.dtCargarFacturasTot', ':idd')); ?>";
          urlpt = urlpt.replace(':idd', arr.id);

          urlex = "<?php echo e(route('facturacions.facturas.dbexcel', ':idd')); ?>";
          urlex = urlex.replace(':idd', arr.id);


          urlidetalle = "<?php echo e(route('facturacions.facturas.dbexcelfacdet', ':idddet')); ?>";
          urlidetalle = urlidetalle.replace(':idddet', arr.id);
          elementidetalle.href = urlidetalle;

          urlisubsidio = "<?php echo e(route('facturacions.facturas.informesubsidiodet', ':idddet')); ?>";
          urlisubsidio = urlisubsidio.replace(':idddet', arr.id);
          elementisubsidio.href = urlisubsidio;

          urlisubsidiodet = "<?php echo e(route('facturacions.facturas.dbexcelfacsubsidiodet', ':idddet')); ?>";
          urlisubsidiodet = urlisubsidiodet.replace(':idddet', arr.id);
          elementisubsidiodet.href = urlisubsidiodet;

          return arr.text;

        }

        $('.cbruta').select2({
          language: 'es',
          // placeholder: "",
          minimumInputLength: 1,
          multiple: false,
          tags: false,
          ajax: {
            url: $('.cbruta').attr('data-url'),
            type: 'GET',
            dataType: 'json',
            processResults: function (data) {
              return {
                results:  $.map(data, function (item) {
                    return {
                        id: item.id,
                        text: item.nombre,
                        idruta: item.ordenru,
                    }
                })
              };
            },
            cache: true
          },
          escapeMarkup: function (markup) { return markup; },
          templateResult: formatDataru,
          templateSelection: formatDataSelectionru,
        });

        function formatDataru (arr) {
          if (arr.loading) return arr.text;
            var markup = '<div clas="col-sm-12"><b>' + arr.text + ' <small>('+ arr.idruta +')</small></b></div>';
            markup += '<div clas="col-sm-12"><span class="fa fa-info"></span> - ' + arr.id + '</div>';
            return markup;
        }

        function formatDataSelectionru (arr) {
          $("input[name='facinicial']").val(1);
          $("input[name='facfinal']").val(arr.idruta);
          $("button[name='generarpdf']").prop('disabled', false);
          return arr.text;
        }

        $('.cbperiodo').on("change", function(e) {
          cbCargar();
        });

        if ($(".cbperiodo").val() > 0) {
          cbCargar();
        }

        function cbCargar() {

            $("#tdatajs").dataTable().fnDestroy();
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

            $.ajax({
              url: urlpt,
              method: 'post',
            }).done(function(data){
              if (data[0].ttotal){
                fini = data[0].facini;
                ffin = data[0].facfin;
                ttotal = data[0].ttotal;
              }
            });

            $('#tdatajs').DataTable({
                "footerCallback": function ( row, data, start, end, display ) {
                    var api = this.api(), data;
                    var intVal = function ( i ) {
                      return typeof i === 'string' ?
                      i.replace(/[\$,]/g, '')*1 :
                      typeof i === 'number' ?
                      i : 0;
                    };

                    pageTotal = api.column(4, { page: 'current'} ).data().reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        },0);

                    $( api.column(4).footer()).html(
                        '$'+ (pageTotal).toFixed(2) +' ( $'+ ttotal +' total)'
                    );
                },
                "drawCallback": function() {
                  var api = this.api();
                  processInfo(api.page.info().recordsTotal);
                },
                "serverSide": true,
                "responsive": true,
                "deferRender":true,
                "ajax": {
                  "url": urls,
                  "type": "post",
                },
                "columns": columna = [
                        {data: 'id', name: 'facturas.id'},
                        {data: 'predio_cod', name: 'predios.predio_cod'},
                        {data: 'doc', name: 'personas.documento'},
                        {data: 'pnombre'},
                        {data: 'total', name: 'facturas.total'},
                        {data: 'atrasos', name: 'facturas.atrasos'},
                        {data: 'factura_est', name: 'facturas.factura_est'},
                        {data: 'action', orderable: false, searchable: false},
                ],
                "dom": "<'card-body pl-0 pr-0 pt-0'<'row align-items-center'<'col-12 col-md-6'B><'col-6'f>>> <'row'<'col-12'tr>> <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                 "buttons": {
                    "dom": {
                        "button": {
                            "className": "krounded btn btn btn-outline-secondary c-brown"
                        }
                    },
                    "buttons": [
                    'pageLength',
                    {
                        "className": "ml-2 btn btn btn-outline-success expexcel",
                        "text": "<span> <i class='fa fa-file-excel'></i></span>",
                        "action": function (e) {
                            // document.location.href = urlex;
                            window.open(urlex,'_blank');
                          }
                    },
                ],
                },
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

        function processInfo(info) {
          if ( info === 0 ) {
              $('.expexcel').addClass('disabled');
              element.classList.add("disabled");
              elementc.classList.add("disabled");
              elementi.classList.add("disabled");
              elementconta.classList.add("disabled");
          } else {
            element.classList.remove("disabled");
            elementc.classList.remove("disabled");
            elementi.classList.remove("disabled");
            elementconta.classList.remove("disabled");
            $("input[name='facinicial']").val(fini);
            $("input[name='facfinal']").val(ffin);
          }
        }

    });

    /*
    $('#direcciones').click(function(){

        if (document.getElementById('direcciones').checked) {

            $("input[name='rutas_gen']").prop('checked', false);
            $("input[name='rutas']").prop('checked', false);

            $("input[name='facinicial']").prop('disabled', true);
            $("input[name='facfinal']").prop('disabled', true);
        } else {
            $("input[name='facinicial']").prop('disabled', false);
            $("input[name='facfinal']").prop('disabled', false);
        }
    });
    */
    $('#general').click(function(){

        if (document.getElementById('general').checked) {
            //$("input[name='direcciones']").prop('checked', false);
            $("input[name='rutas']").prop('checked', false);
            $("select[name='ruta_id']").prop('disabled', true);
            $("button[name='generarpdf']").prop('disabled', false);
        }
    });

    $('#rutas').click(function(){

        if (document.getElementById('rutas').checked) {
            //$("input[name='direcciones']").prop('checked', false);
            $("input[name='general']").prop('checked', false);
            $("select[name='ruta_id']").prop('disabled', false);
            $("button[name='generarpdf']").prop('disabled', true);

        } else {
            $("select[name='ruta_id']").prop('disabled', true);
        }
    });

    $('#generarpdf').click(function(){

      if (document.getElementById('general').checked) {

        var facini = parseInt($("input[name='facinicial']").val());
        var facfin = parseInt($("input[name='facfinal']").val());
        var intervalofac = parseInt($("select[name='intervalo']").val());
        var urls = '';

        while (facini < facfin) {
          processFac(facini, facfin, intervalofac);
          if (intervalofac > 50){
            delay(60000);
          } else if (intervalofac > 25 && intervalofac <51) {
            delay(30000);
          } else {
            delay(20000);
          }
          facini = facini + intervalofac;
        }

      } else if (document.getElementById('rutas').checked) {

        var facini = parseInt($("input[name='facinicial']").val());
        var facfin = parseInt($("input[name='facfinal']").val());
        var intervalofac = parseInt($("select[name='intervalo']").val());
        var urls = '';

        while (facini < facfin) {
          processFacRuta(facini, facfin, intervalofac);
          if (intervalofac > 50){
            delay(60000);
          } else if (intervalofac > 25 && intervalofac <51) {
            delay(30000);
          } else {
            delay(20000);
          }
          facini = facini + intervalofac;
        }

      }

    });

    function delay(ms) {
        var cur_d = new Date();
        var cur_ticks = cur_d.getTime();
        var ms_passed = 0;
        while(ms_passed < ms) {
            var d = new Date();
            var ticks = d.getTime();
            ms_passed = ticks - cur_ticks;
        }
    }

    function processFac(facin, facfi, intervalofa) {
      if (facin < facfi) {
        if ((facin + intervalofa) > facfi) {
          urls = "<?php echo e(route('facturacions.facturas.facturasPdf', ['p_id' => ':f_pe','f_ini' => ':ini','f_fin' => ':fin'])); ?>";
          urls = urls.replace(':f_pe', $(".cbperiodo").val());
          urls = urls.replace(':ini', facin);
          urls = urls.replace(':fin', facfi);
          window.open(urls);
        } else {
          urls = "<?php echo e(route('facturacions.facturas.facturasPdf', ['p_id' => ':f_pe','f_ini' => ':ini','f_fin' => ':fin'])); ?>";
          urls = urls.replace(':f_pe', $(".cbperiodo").val());
          urls = urls.replace(':ini', facin);
          urls = urls.replace(':fin', facin + intervalofa);
          window.open(urls);
        }
      }
    }

    function processFacRuta(facin, facfi, intervalofa) {
      if (facin < facfi) {
        if ((facin + intervalofa) > facfi) {
          urls = "<?php echo e(route('facturacions.facturas.facturasPdfRuta', ['p_id' => ':f_pe','r_id' => ':r_ru','f_ini' => ':ini','f_fin' => ':fin'])); ?>";
          urls = urls.replace(':f_pe', $(".cbperiodo").val());
          urls = urls.replace(':r_ru', $(".cbruta").val());
          urls = urls.replace(':ini', facin);
          urls = urls.replace(':fin', facfi);
          window.open(urls);
        } else {
          urls = "<?php echo e(route('facturacions.facturas.facturasPdfRuta', ['p_id' => ':f_pe','r_id' => ':r_ru','f_ini' => ':ini','f_fin' => ':fin'])); ?>";
          urls = urls.replace(':f_pe', $(".cbperiodo").val());
          urls = urls.replace(':r_ru', $(".cbruta").val());
          urls = urls.replace(':ini', facin);
          urls = urls.replace(':fin', facin + intervalofa);
          window.open(urls);
        }
      }
    }

    $('#adesf').click(function(e){
        var _this = $(this);
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro de generar la facturación?',
            text: 'Estas seguro de continuar',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: 'null',
            cancelButtonColor: 'null',
            confirmButtonClass: 'btn btn-danger',
            cancelButtonClass: 'btn btn-primary',
            confirmButtonText: 'Si seguro!',
            cancelButtonText: 'Cancelar',
        }).then(res => {
            if (res.value) {
                var urls = $(this).attr('href');
                $('.alert').html('');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: urls,
                    method: 'get'
                }).done(function(data){
                    if (data.success){
                    $('.alert').addClass('alert-success');
                    $('.alert').show();
                    $('.alert').html('<p>'+data.success+'</p>');
                    }

                    setTimeout(function(){
                        $('.alert').hide();
                    },4500);
                });
            }
        });
    });

  </script>
<?php $__env->stopSection(); ?>



<?php /**PATH C:\xampp\htdocs\aromanos\resources\views/facturacions/facturas/index.blade.php ENDPATH**/ ?>