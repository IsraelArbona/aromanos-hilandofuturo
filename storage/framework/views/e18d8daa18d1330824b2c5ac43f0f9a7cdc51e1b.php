<?php $__env->startSection('pageheader'); ?>
    <h4 class="c-grey-900 mT-10 mB-30">
      Listado Productos <small>(<?php echo e(trans('app.manage')); ?>)</small>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventarios.inv_productos.create')): ?>
        <a href="<?php echo e(route('inventarios.inv_productos.create')); ?>" class="btn bbou-orange-400 rounded-pill float-right" rel="tab">
          <?php echo e(trans('app.add_button')); ?>

        </a>
      <?php endif; ?>
    </h4>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="alert" style="display:none"></div>
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="table-responsive">
            <table id="tdatajs" class="display compact table table-striped table-hover dt-responsive nowrap" cellspacing="0" width="100%">

                    <?php if(Auth::user()->id <= 3): ?>
                        <thead>
                            <tr>
                                <th width="50px">Código</th>
                                <th>Nombre</th>
                                <th>Bodega</th>
                                <th>SubCategoria</th>
                                <th>Unidad</th>
                                <th>Lote</th>
                                <th>Estante</th>
                                <th>Cantidad</th>
                                <th>Costo</th>
                                <th>Precio</th>
                                <th width="50px">Estado</th>
                                <th width="140px">Acción</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th colspan="7" style="text-align:right">SubTotal:</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th colspan="2"></th>
                            </tr>
                        </tfoot>

                    <?php else: ?>
                        <thead>
                            <tr>
                                <th width="50px">Código</th>
                                <th>Nombre</th>
                                <th>Bodega</th>
                                <th>SubCategoria</th>
                                <th>Unidad</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th width="50px">Estado</th>
                            </tr>
                        </thead>
                    <?php endif; ?>

            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script defer type="text/javascript">

            var tcantidad = "", tcosto = "", tprecio = "";
            $("#tdatajs").dataTable().fnDestroy();
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            var titulo = "Listado Inv. Categorias";

            <?php if(Auth::user()->id <= 3): ?>

                $.ajax({
                url: "<?php echo e(route('inventarios.inv_productos.dtCargarInvProductosTot')); ?>",
                method: 'post',
                }).done(function(data){
                    if (data[0].pprecio){
                        tcantidad = data[0].pcantidad;
                        tcosto = data[0].pcosto;
                        tprecio = data[0].pprecio;
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


                        pageCantidad = api.column(7, { page: 'current'} ).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            },0);

                        pageCosto = api.column(8, { page: 'current'} ).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            },0);

                        pagePrecio = api.column(9, { page: 'current'} ).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            },0);

                        $( api.column(7).footer()).html(
                            (pageCantidad).toFixed(0) +' ( '+ tcantidad +' t.)'
                        );
                        $( api.column(8).footer()).html(
                            '$'+ (pageCosto).toFixed(2) +' ( $'+ tcosto +' t.)'
                        );
                        $( api.column(9).footer()).html(
                            '$'+ (pagePrecio).toFixed(2) +' ( $'+ tprecio +' t.)'
                        );

                    },

                    "deferRender":true,
                    "serverSide": true,
                    "responsive": true,
                    "ajax": "<?php echo e(route('inventarios.inv_productos.dtCargarInvProductos')); ?>",
                    "columns": [
                        {data: 'producto_cod'},
                        {data: 'nombre'},
                        {data: 'bnombre'},
                        {data: 'scnombre'},
                        {data: 'unombre'},
                        {data: 'lote'},
                        {data: 'estante'},
                        {data: 'cantidad'},
                        {data: 'costo'},
                        {data: 'precio'},
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

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventarios.inv_productos.dbexcel')): ?>
                        {
                            "className": "ml-2 btn btn btn-outline-success",
                            "text": "<span> <i class='fa fa-file-excel'></i></span>",
                            "action": function (e) {
                                document.location.href = "<?php echo e(route('inventarios.inv_productos.dbexcel')); ?>";
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
                    aaSorting: []
                })
                .columns.adjust()
                .responsive.recalc();

            <?php else: ?>

                $('#tdatajs').DataTable({
                    "deferRender":true,
                    "serverSide": true,
                    "responsive": true,
                    "ajax": "<?php echo e(route('inventarios.inv_productos.dtCargarInvProductos')); ?>",
                    "columns": [
                        {data: 'producto_cod'},
                        {data: 'nombre'},
                        {data: 'bnombre'},
                        {data: 'scnombre'},
                        {data: 'unombre'},
                        {data: 'cantidad'},
                        {data: 'precio'},
                        {data: 'estadot'},
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

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventarios.inv_productos.dbexcel')): ?>
                        {
                            "className": "ml-2 btn btn btn-outline-success",
                            "text": "<span> <i class='fa fa-file-excel'></i></span>",
                            "action": function (e) {
                                document.location.href = "<?php echo e(route('inventarios.inv_productos.dbexcel')); ?>";
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
                    aaSorting: []
                });

            <?php endif; ?>


    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/inventarios/inv_productos/index.blade.php ENDPATH**/ ?>