<?php $__env->startSection('pageheader'); ?>
    <nav class="navbar navbar-expand-md navbar-light">

        <h4 class="c-grey-900">
        Factura Ventas POS<small>(Lista)</small>
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
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturaventapos.create')): ?>
                    <a href="<?php echo e(route('facturacions.inv_facturaventapos.create')); ?>" class="btn nav-link bbou-pink-400 rounded-pill" rel="tab">
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

    var element = document.getElementById("ades");
    var urls = "<?php echo e(route('facturacions.inv_facturaventapos.dtCargarInvfacturaventapos',[$ddes,$dhas])); ?>";
    var urlstot = "<?php echo e(route('facturacions.inv_facturaventas.dtCargarInvfacturaventasTot',[$ddes,$dhas])); ?>";

    var urlsexc = "<?php echo e(route('facturacions.inv_facturaventapos.exceldetpos',[$ddes,$dhas])); ?>";
    var urlcarga = "<?php echo e(route('facturacions.inv_facturaventas.exceldetcargapos',[$ddes,$dhas])); ?>";

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
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturaventapos.index')): ?>
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
      } else {
          element.classList.remove("disabled");
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
            var urlp = "<?php echo e(route('facturacions.inv_facturaventapos.dtCargarInvfacturaventapos', ['ddes' => ':pdes','dhas' => ':phas'])); ?>";
            var urlstot = "<?php echo e(route('facturacions.inv_facturaventas.dtCargarInvfacturaventasTot', ['ddes' => ':pdes','dhas' => ':phas'])); ?>";
            var urlpexc = "<?php echo e(route('facturacions.inv_facturaventapos.exceldetpos', ['ddes' => ':pdes','dhas' => ':phas'])); ?>";
            var urlcarga = "<?php echo e(route('facturacions.inv_facturaventas.exceldetcargapos', ['ddes' => ':pdes','dhas' => ':phas'])); ?>";

            urlp = urlp.replace(':pdes', $("input[name='desde']").val());
            urlp = urlp.replace(':phas', $("input[name='hasta']").val());

            urlstot = urlstot.replace(':pdes', $("input[name='desde']").val());
            urlstot = urlstot.replace(':phas', $("input[name='hasta']").val());


            urlpexc = urlpexc.replace(':pdes', $("input[name='desde']").val());
            urlpexc = urlpexc.replace(':phas', $("input[name='hasta']").val());

            urlcarga = urlcarga.replace(':pdes', $("input[name='desde']").val());
            urlcarga = urlcarga.replace(':phas', $("input[name='hasta']").val());
            element.href = urlcarga;

            recargar(urls,urlsexc,urlstot);
        }
    });

</script>
<?php $__env->stopSection(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/facturacions/inv_facturaventapos/index.blade.php ENDPATH**/ ?>