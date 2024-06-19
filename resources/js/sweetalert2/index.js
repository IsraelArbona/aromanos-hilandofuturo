import * as $ from 'jquery';
import Swal from 'sweetalert2';
/*
export default (function () {
    $(document).on('click', "form.delete button", function(e) {
        var _this = $(this);
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?', // Opération Dangereuse
            text: 'Estas seguro de continuar', // Êtes-vous sûr de continuer ?
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: 'null',
            cancelButtonColor: 'null',
            confirmButtonClass: 'btn btn-danger',
            cancelButtonClass: 'btn btn-primary',
            confirmButtonText: 'Si seguro!', // Oui, sûr
            cancelButtonText: 'Cancelar', // Annuler
        }).then(res => {
            if (res.value) {
                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
               });
               var urls = $(this).data('remote');

               $('.alert-danger').html('');
               $.ajax({
                  url: urls,
                  method: 'delete',
                  //data: {_method: 'DELETE', submit: true}    
                  data: $('#sf_form').serialize(),
                  success: function(data){
                      $('.alert-danger').show();
                      $('.alert-danger').append('<p>'+data.success+'</p>');




$('#dataTable').DataTable({
                      language: {
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
                        }
                      },
                      aaSorting: []
                  });






                  } 
               });




                _this.closest("form").submit();
            }
        });
    });
}())

*/
