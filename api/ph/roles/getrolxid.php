<?php
include '../../config.php';
$Datos = array();

try {
    $sql = "SELECT * FROM ROLES WHERE RLS_IDINTRN=".$_POST["IDROL"];
    $res = mysql_query($sql, $conexion) or die(mysql_error($conexion));
    while($row = mysql_fetch_assoc($res)) {
        $r[] = $row;
    } 
    if(count($r) > 0){
        $VALUES["RESULT"] = true;
        $VALUES["MESSAGE"] = "Consulta exitosa.";
        $VALUES["DATA"] = $r;
    } else {
        $VALUES["RESULT"] = false;
        $VALUES["MESSAGE"] = "Datos existen nos disponibles.";
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