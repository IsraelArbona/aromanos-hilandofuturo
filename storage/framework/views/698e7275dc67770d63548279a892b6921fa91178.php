<?php $__env->startSection('pageheader'); ?>
    <nav class="navbar navbar-expand-md navbar-light">

        <h4 class="c-grey-900">
        Factura Ventas <small>(Lista)</small>
        </h4>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a id="ades" href="javascript:void(0)" class="btn disabled nav-link bbou-pink-400 rounded-pill">
                    Cargar Productos
                </a>
            </li>

            <li class="nav-item">
            <a id="adesc" class="btn disabled nav-link bbou-pink-400 rounded-pill" data-toggle="modal"  data-target="#panel-pdf">
              Guardar PDF
            </a>
          </li>

            <li class="nav-item">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturaventas.create')): ?>
                    <a href="<?php echo e(route('facturacions.inv_facturaventas.create')); ?>" class="btn nav-link bbou-pink-400 rounded-pill" rel="tab">
                    <?php echo e(trans('app.add_button')); ?>

                    </a>
                <?php endif; ?>
            </li>

        </ul>
        </div>

    </nav>

    <div class="form-row">
        <div class="col-md-2">
            <?php echo Form::myInput('date', 'desde', '* Fecha Ini.', ['class' => 'form-control ddesde']); ?>

        </div>

        <div class="col-md-3">
            <?php echo Form::label('hasta', '* Fecha Fin.'); ?>

            <div class="input-group">
                <?php echo Form::input('date', 'hasta', '', ['class' => 'form-control dhasta']); ?>

                <div class="input-group-append">
                        <button class="btn text-white bgc-pink-400 aggbuscar">Buscar</button>
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
    <div class="bgc-white bd bdrs-3 p-10 mB-30">
        <table id="tdatajs" class="display compact table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="100px">Id</th>
                    <th width="100px">Factura Cod.</th>
                    <th>Documento</th>
                    <th>Cliente</th>
                    <th>Subtotal</th>
                    <th>Iva</th>
                    <th>Descuento</th>
                    <th>Total</th>
                    <th width="50px">Estado</th>
                    <th width="80px">Acción</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th colspan="4" style="text-align:right">SubTotal:</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="2"></th>
                </tr>
            </tfoot>

        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script defer type="text/javascript">

    $("input[name='desde']").val('<?php echo e($ddes); ?>');
    $("input[name='hasta']").val('<?php echo e($dhas); ?>');

    var tsubtotal = "", tiva = "", tdescuento = "", ttotal = "";
    var urlpt = "", fini = "", ffin = "";

    var element = document.getElementById("ades");
    var elementc = document.getElementById("adesc");

    var urls = "<?php echo e(route('facturacions.inv_facturaventas.dtCargarInvfacturaventas',[$ddes,$dhas])); ?>";
    var urlstot = "<?php echo e(route('facturacions.inv_facturaventas.dtCargarInvfacturaventasTot',[$ddes,$dhas])); ?>";

    var urlsexc = "<?php echo e(route('facturacions.inv_facturaventas.exceldet',[$ddes,$dhas])); ?>";
    var urlcarga = "<?php echo e(route('facturacions.inv_facturaventas.exceldetcarga',[$ddes,$dhas])); ?>";

    element.href = urlcarga;
    recargar(urls,urlsexc,urlstot);

    function recargar(rurls,rurlsexc,rurlstot){

        $("#tdatajs").dataTable().fnDestroy();
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

        $.ajax({
            url: rurlstot,
            method: 'post',
        }).done(function(data){
            if (data[0].ftotal){
                tsubtotal = data[0].fsubtotal;
                tiva = data[0].fiva;
                tdescuento = data[0].fdescuento;
                ttotal = data[0].ftotal;

                fini = data[0].facini;
                ffin = data[0].facfin;
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


                pageSubtotal = api.column(4, { page: 'current'} ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0);

                pageIva = api.column(5, { page: 'current'} ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0);

                pageDescuento = api.column(6, { page: 'current'} ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0);

                pageTotal = api.column(7, { page: 'current'} ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0);

                $( api.column(4).footer()).html(
                    '$'+(pageSubtotal).toFixed(2) +' ( '+ tsubtotal +' t.)'
                );
                $( api.column(5).footer()).html(
                    '$'+ (pageIva).toFixed(2) +' ( $'+ tiva +' t.)'
                );
                $( api.column(6).footer()).html(
                    '$'+ (pageDescuento).toFixed(2) +' ( $'+ tdescuento +' t.)'
                );
                $( api.column(7).footer()).html(
                    '$'+ (pageTotal).toFixed(2) +' ( $'+ ttotal +' t.)'
                );
            },

            "serverSide": true,
            "responsive": true,
            "deferRender":true,
            "ajax": {
                "url": rurls,
                "type": "post",
            },
            "drawCallback": function() {
                var api = this.api();
                processInfo(api.page.info().recordsTotal);
            },
            "columns": columna = [
                    {data: 'id',searchable: false},
                    {data: 'factura_cod'},
                    {data: 'documento'},
                    {data: 'pnombre'},
                    {data: 'subtotal'},
                    {data: 'iva'},
                    {data: 'descuento'},
                    {data: 'total'},
                    {data: 'estadot'},
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
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturaventas.index')): ?>
                {
                    "className": "ml-2 btn btn btn-outline-success",
                    "text": "<span> <i class='fa fa-file-excel'></i></span>",
                    "action": function (e) {
                            document.location.href = rurlsexc;
                        }
                },
                <?php endif; ?>
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
            "aLengthMenu": [[15, 30, 50], [15, 30, 50]],

            aaSorting: []
        });

    }

    function processInfo(info) {
      if ( info === 0 ) {
          element.classList.add("disabled");
          elementc.classList.add("disabled");
      } else {
          element.classList.remove("disabled");
          elementc.classList.remove("disabled");
      }
    }

    $('#generarpdf').click(function(){

        let facini = parseInt(fini);
        let facfin = parseInt(ffin);
        let facinilimit = 0;

        let intervalofac = parseInt($("select[name='intervalo']").val());
        let urls = '';

        while (facini < facfin) {
            processFac(facini, facfin, facinilimit, intervalofac);
            if (intervalofac > 50){
            delay(40000);
            } else if (intervalofac > 25 && intervalofac <51) {
            delay(20000);
            } else {
            delay(10000);
            }
            facini = facini + intervalofac;
            facinilimit = facinilimit + intervalofac;
        }

    });

    function delay(ms) {
        let cur_d = new Date();
        let cur_ticks = cur_d.getTime();
        let ms_passed = 0;
        while(ms_passed < ms) {
            let d = new Date();
            let ticks = d.getTime();
            ms_passed = ticks - cur_ticks;
        }
    }

    function processFac(facin, facfi, facinlimit, intervalofa) {
      if (facin < facfi) {

          let enc_facin =  encrita(facinlimit.toString());
          let enc_facint = encrita(intervalofa.toString());

          let enc_facdesde = encrita($("input[name='desde']").val());
          let enc_fachasta = encrita($("input[name='hasta']").val());

          urls = "<?php echo e(route('facturacions.inv_facturaventas.facturaventaPdf', ['f_inilim' => ':inilim','f_inter' => ':inter','f_des' => ':des','f_has' => ':has'])); ?>";
          urls = urls.replace(':inilim', enc_facin);
          urls = urls.replace(':inter', enc_facint);
          urls = urls.replace(':des',  enc_facdesde);
          urls = urls.replace(':has',  enc_fachasta);
          window.open(urls);

      }
    }


    $('.aggbuscar').click(function(e){
        e.preventDefault();

        if ( $("input[name='desde']").val() > $("input[name='hasta']").val() ) {
            $('.alert').addClass('alert-danger');
            $('.alert').show();
            $('.alert').html('<p> Fecha inicial mayor a la fecha final </p>');
            setTimeout(function(){
                $('.alert').hide();
            },2500);
            $("input[name='hasta']").val('<?php echo e($dhas); ?>');
        } else {
            var urlp = "<?php echo e(route('facturacions.inv_facturaventas.dtCargarInvfacturaventas', ['ddes' => ':pdes','dhas' => ':phas'])); ?>";
            var urlstot = "<?php echo e(route('facturacions.inv_facturaventas.dtCargarInvfacturaventasTot', ['ddes' => ':pdes','dhas' => ':phas'])); ?>";
            var urlpexc = "<?php echo e(route('facturacions.inv_facturaventas.exceldet', ['ddes' => ':pdes','dhas' => ':phas'])); ?>";
            var urlcarga = "<?php echo e(route('facturacions.inv_facturaventas.exceldetcarga', ['ddes' => ':pdes','dhas' => ':phas'])); ?>";

            urlp = urlp.replace(':pdes', $("input[name='desde']").val());
            urlp = urlp.replace(':phas', $("input[name='hasta']").val());

            urlstot = urlstot.replace(':pdes', $("input[name='desde']").val());
            urlstot = urlstot.replace(':phas', $("input[name='hasta']").val());

            urlpexc = urlpexc.replace(':pdes', $("input[name='desde']").val());
            urlpexc = urlpexc.replace(':phas', $("input[name='hasta']").val());

            urlcarga = urlcarga.replace(':pdes', $("input[name='desde']").val());
            urlcarga = urlcarga.replace(':phas', $("input[name='hasta']").val());
            element.href = urlcarga;

            recargar(urlp,urlpexc,urlstot);
        }
    });

</script>
<?php $__env->stopSection(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/facturacions/inv_facturaventas/index.blade.php ENDPATH**/ ?>