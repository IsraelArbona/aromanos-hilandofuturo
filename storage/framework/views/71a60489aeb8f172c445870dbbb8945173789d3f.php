<?php $__env->startSection('pageheader'); ?>
    <h4 class="c-grey-900 mT-10 mB-30">
      Listado Marcas <small>(<?php echo e(trans('app.manage')); ?>)</small>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('generals.marcas.create')): ?> 
        <a href="<?php echo e(route('generals.marcas.create')); ?>" class="btn rounded-pill float-right bbou-indigo-400"  rel="tab">
          <?php echo e(trans('app.add_button')); ?>

        </a>
      <?php endif; ?>
    </h4>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="alert" style="display:none"></div>
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="tdatajs" class="display compact table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="20px">Código</th>
                    <th>Nombre</th>
                    <th width="50px">Estado</th>
                    <th width="140px">Acción</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </tfoot>    
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script defer type="text/javascript">
            $("#tdatajs").dataTable().fnDestroy();
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            var titulo = "Listado Marcas";
            $('#tdatajs').DataTable({
                "deferRender":true,
                "serverSide": true,
                "responsive": true,
                "ajax": "<?php echo e(route('generals.marcas.dtCargarMarcas')); ?>",
                "columns": [
                    {data: 'id'},
                    {data: 'nombre'},
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
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('generals.marcas.dbcsv')): ?> 
                    {
                         
                          "extend": "csvHtml5",
                          "className": "ml-2 btn btn btn-outline-secondary",
                          "text": "<span> <i class='fa fa-file-csv'></i></span>",
                          "exportOptions": {
                            "columns": [ 0, 1, 2]
                          }
                          
                    },
                    <?php endif; ?> 
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('generals.marcas.dbexcel')): ?> 
                    {
                          "extend": "excelHtml5",
                          "className": "ml-2 btn btn btn-outline-success",
                          "text": "<span> <i class='fa fa-file-excel'></i></span>",
                          "autoFilter": "true",
                          "exportOptions": {
                            "columns": [ 0, 1, 2]
                          }
                    },
                    <?php endif; ?> 
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('generals.marcas.dbpdf')): ?> 
                    {
                          "extend": "pdfHtml5",
                          "className": "ml-2 btn btn btn-outline-danger",
                          "text": "<span> <i class='fa fa-file-pdf'></i></span>",
                          "download": "open",
                          "exportOptions": {
                            "columns": [ 0, 1, 2]
                          }
                    },
                    <?php endif; ?> 
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('generals.marcas.dbprint')): ?> 
                    {
                          "extend": "print",
                          "className": "ml-2 btn btn btn-outline-info",
                          "text": "<span> <i class='fa fa-print'></i></span>",
                          "exportOptions": {
                            "columns": [ 0, 1, 2]
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
 
    </script>
<?php $__env->stopSection(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/generals/marcas/index.blade.php ENDPATH**/ ?>