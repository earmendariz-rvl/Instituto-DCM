//		Creado por:			    Eduardo Armendariz
//		Fecha de creacion:		21/SEP/2018
//		Empresa:			    Rosvel Servicios Multimedia
//		Nombre de Archivo: 		JS Utilerias

function showAlertError(mensaje, segundos)
{
	var tiempo = segundos * 1000;
	$('body').pgNotification({
          		style: 'flip',
                message: mensaje,
                timeout: tiempo,
                type: "danger"
        }).show();
}

function showAlertExito(mensaje, segundos)
{
	var tiempo = segundos * 1000;
	$('body').pgNotification({
          		style: 'flip',
                message: mensaje,
                timeout: tiempo,
                type: "success"
        }).show();
}



function validarEmail(email) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!expr.test(email) )
       return false;
   else
       return true;
}

var settingsTable = {
            "sDom": "t",
            "destroy": true,
            "paging": true,
            "scrollCollapse": true,
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [0]
            }],
            "order": [
                [0, "asc"]
            ],
            "language": { 
                          "decimal":        "",
                          "emptyTable":     "No hay datos disponibles para mostrar",
                          "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                          "infoEmpty":      "Mostrandi 0 a 0 de 0 registros",
                          "infoFiltered":   "(filtrado de _MAX_ registros)",
                          "infoPostFix":    "",
                          "thousands":      ",",
                          "lengthMenu":     "Mostar _MENU_ registros",
                          "loadingRecords": "Cargando...",
                          "processing":     "Procesando...",
                          "search":         "Buscar:",
                          "zeroRecords":    "NO hay resultados de busqueda",
                          "paginate": {
                              "first":      "Primero",
                              "last":       "Último",
                              "next":       "Siguiente",
                              "previous":   "Anterior"
                          },
                          "aria": {
                              "sortAscending":  ": activate to sort column ascending",
                              "sortDescending": ": activate to sort column descending"
                          }
                        }
        };