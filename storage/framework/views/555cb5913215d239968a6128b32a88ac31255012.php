<?php $__env->startSection('pageheader'); ?>
    <h4 class="c-grey-900 mT-10 mB-30">
      Predios <small>(Lista)</small>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('procesos.predios.create')): ?> 
        <a href="<?php echo e(route('procesos.predios.create')); ?>" class="btn bbou-purple-400 rounded-pill float-right" rel="tab">
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
                    <th width="20px">Id</th>
                    <th width="20px">Cod. Predio</th>
                    <th width="20px">Cod. Catrastal</th>
                    <th>Nro. Documento</th>
                    <th>Suscriptor</th>
                    <th>Categoria</th>
                    <th>Dir. Corresp.</th>
                    <th>Ciudad</th>
                    <th>Estado</th> 
                    <th width="140px">Acción</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Cod. Predio</th>
                    <th>Cod. Catrastal</th>
                    <th>Nro. Documento</th>
                    <th>Suscriptor</th>
                    <th>Categoria</th>
                    <th>Dir. Corresp.</th>
                    <th>Ciudad</th>
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
  $('#tdatajs').DataTable({
      "serverSide": true,
      "responsive": true,
      "deferRender":true,
      "processing": true,
      "ajax": {
        "url": "<?php echo e(route('procesos.predios.dtCargarPredios')); ?>",
        "type": "post",
      },
      "columns": columna = [

              {data: 'id',searchable: false},
              {data: 'predio_cod'},
              {data: 'catrastal_cod',searchable: false},
              {data: 'documento'},
              {data: 'pnombre'},
              {data: 'canombre',searchable: false},
              {data: 'direcionc',searchable: false},
              {data: 'cnombre',searchable: false},
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
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('procesos.predios.dbexcel')): ?> 
          {
              "className": "ml-2 btn btn btn-outline-success",
              "text": "<span> <i class='fa fa-file-excel'></i></span>",
              "action": function (e) {
                  document.location.href = "<?php echo e(route('procesos.predios.dbexcel')); ?>";
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
<?php $__env->stopSection(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/procesos/predios/index.blade.php ENDPATH**/ ?>