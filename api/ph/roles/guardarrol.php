<?php
include '../../config.php';
$Datos = array();

try {
    $sql = "INSERT INTO ROLES 
                        (RLS_CLV, RLS_NMBR, RLS_ACTV, RLS_CRCN) 
                VALUES ('".strtoupper($_POST["CLAVE"])."', '".strtoupper($_POST["NOMBRE"])."', ".$_POST["ACTIVO"].", '".$_SESSION["USR_CLV"]." ".date("Y-m-d H:i:s")."')";
    $res = mysql_query($sql, $conexion) or die(mysql_error($conexion));
    if($res){
        $VALUES["RESULT"] = true;
        $VALUES["MESSAGE"] = "Datos guardados correctamente.";
        $VALUES["DATA"] = null;
    } else {
        $VALUES["RESULT"] = false;
        $VALUES["MESSAGE"] = "No fue posible guardar los datos. ".die(mysql_error($conexion));
        $VALUES["DATA"] = null;
    }
    array_push($Datos, $VALUES);
    echo json_encode($Datos);
} catch (Exception $ex) {
    error_log("[" . date("Y-m-d H:i:s") . "] EXC >>" . $exc->getMessage() . " \r\n", 3, "Log.log");
    $VALUES["RESULT"] = false;
    $VALUES["MESSAGE"] = "Problema. " . $ex;
    $VALUES["DATA"] = null;
    array_push($Datos, $VALUES);
    echo json_encode($Datos);
}
?>