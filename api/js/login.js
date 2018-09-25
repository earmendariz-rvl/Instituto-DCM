//Creado por:		    Eduardo Armendariz
//Fecha de creacion:	21/SEP/2018
//Empresa:			    ROSVEL SERVICIOS MULTIMEDIA
//Nombre de Archivo: 	Login 

var RVL = function ()
{
     $('#form-login').validate({
      invalidHandler: function(event, validator) {
        showAlertError("Revise las validaciones de inicio de sesión", 3);
      }, 
      submitHandler: function(form) {
            var USER = $.trim($("#txtUsuario").val());
            var PASS = $.trim($("#txtPassword").val());
            $.ajax({
                type: 'POST',
                url: 'api/ph/login.php',
                dataType: 'json',
                data: {USUARIO: USER, PASSWORD: PASS},
                success: function (response) {
                    console.log(response);
                    if(response[0].RESULT)
                    {
                        showAlertExito("Accediendo a plataforma DCM. Bienvenid@", 3);
                        setTimeout(function(){ window.location = "web/inicio/";}, 3000);
                    }
                    else
                    {
                        showAlertError(response[0].MESSAGE, 4);
                    }
                },
                error: function (error) {
                    showAlertError(error.responseText, 0);
                }
            });
        }
    });
}();