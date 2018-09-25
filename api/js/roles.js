//Creado por:		    Eduardo Armendariz
//Fecha de creacion:	21/SEP/2018
//Empresa:			    ROSVEL SERVICIOS MULTIMEDIA
//Nombre de Archivo: 	Catalogo Roles de Usuario

var tabla = $("#clTableRoles").DataTable(settingsTable);

$("#btnNuevoRol").click(function(){
	$("#idRol").val(0);
	$("#txtClaveRol").val("");
	$("#txtNombreRol").val("");
	$("#chkActivoRol").prop("checked", true);
	$("#datosRol").modal("show");
});

cargarDatos();

function cargarDatos(){
	$.ajax({
		type: "POST",
		url: "../../api/ph/roles/getroles.php",
		dataType: 'json',
		success: function(response){
			if(response[0].RESULT){
				tabla.clear().draw();
				for (var i = 0; i < response[0].DATA.length; i++) {
					var item = response[0].DATA[i];
					var activo = '';
					if(item.RLS_ACTV == 1){
						activo = '<span class="label label-success">Si</span>';
					} else {
						activo = '<span class="label label-danger">No</span>';
					}
					tabla.row.add([
						item.RLS_CLV,
						item.RLS_NMBR,
						activo,
						'<a href="javascript:;" class="btn btn-info btn-sm" onclick="editarRol('+item.RLS_IDINTRN+')" tooltip="Editar"><i class="fa fa-edit"></i></a>'
						]).draw();
				}
			} else {
				showAlertError(response[0].MESSAGE, 3);
			}
		},
		error: function(error){
			showAlertError(error.responseText, 3);
		}
	});
}

function editarRol(idRol){
	$("#idRol").val(idRol);
	$.ajax({
		type: "POST",
		url: "../../api/ph/roles/getrolxid.php",
		dataType: 'json',
		data: { IDROL: idRol },
		success: function(response){
			if(response[0].RESULT){
				console.log(response[0].DATA);
				$("#txtClaveRol").val(response[0].DATA[0].RLS_CLV);
				$("#txtNombreRol").val(response[0].DATA[0].RLS_NMBR);
				if(response[0].DATA[0].RLS_ACTV == 1){
					$("#chkActivoRol").prop("checked", true);
				} else {
					$("#chkActivoRol").prop("checked", false);
				}	
				$("#datosRol").modal("show");
			} else {
				showAlertError(response[0].MESSAGE, 3);
			}
		},
		error: function(error){
			showAlertError(error.responseText, 3);
		}
	});
}

$('#form-roles').validate({
  invalidHandler: function(event, validator) {
    showAlertError("Revise las validaciones de inicio de sesión", 3);
  }, 
  submitHandler: function(form) {
        var url = "";
        var activo = false;
  		if($("#idRol").val() == 0){
  			url = "../../api/ph/roles/guardarrol.php";
  		} else {
  			url = "../../api/ph/roles/editarrol.php";
  		}
  		if($("#chkActivoRol").is(':checked')){
  			activo = 1;
  		} else {
  			activo = 0;
  		}
  		$.ajax({
            type: 'POST',
            url: url,
            dataType: 'json',
            data: {	
            		CLAVE: $("#txtClaveRol").val(),
            		NOMBRE: $("#txtNombreRol").val(), 
            		ACTIVO: activo, 
            		IDROL: $("#idRol").val()
            	},
            success: function (response) {
                console.log(response);
                if(response[0].RESULT)
                {
                	$("#datosRol").modal("hide");
                    showAlertExito(response[0].MESSAGE, 4);
                    cargarDatos();
                }
                else
                {
                	$("#datosRol").modal("hide");
                    showAlertError(response[0].MESSAGE, 4);
                }
            },
            error: function (error) {
            	$("#datosRol").modal("hide");
                showAlertError(error.responseText, 0);
            }
        });
    }
});
