<?php
include '../../config.php';
$Datos = array();

try {
    $sql = "UPDATE ROLES SET RLS_CLV='".strtoupper($_POST["CLAVE"])."', RLS_NMBR='".strtoupper($_POST["NOMBRE"])."', RLS_ACTV=".$_POST["ACTIVO"].", RLS_MDFCN='".$_SESSION["USR_CLV"]." ".date("Y-m-d H:i:s")."' WHERE RLS_IDINTRN=".$_POST["IDROL"]; 
    $res = mysql_query($sql, $conexion) or die(mysql_error($conexion));
    if($res){
        $VALUES["RESULT"] = true;
        $VALUES["MESSAGE"] = "Datos guardados correctamente.";
        $VALUES["DATA"] = null;
    } else {
        $VALUES["RESULT"] = false;
        $VALUES["MESSAGE"] = "No fue posible guardar los datos. ";
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