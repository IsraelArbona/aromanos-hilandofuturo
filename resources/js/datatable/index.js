
import * as $ from 'jquery';
import 'datatables';
/*
export default (function () {
  $('#dataTable').DataTable({
		language: {
			 'url' : 'https://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'
			  // More languages : http://www.datatables.net/plug-ins/i18n/
		},
		aaSorting: []
	});
}());
*/
/*
export default (function () {

$("a[rel='tab']").on('click', function (event) {
              event.preventDefault();
              if ( $(this).attr('href') != '#' ) {
                $('.ajax-content').html('');
                $.get($(this).attr("href"), function(data){
                  var data = $.parseJSON(data);
                  var cade = '';
                  cade += data.pageheader;
                  cade += data.content;
                  cade += data.js;
                  $('.ajax-content').html(cade);

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

                });
              };
          });

}());

*/