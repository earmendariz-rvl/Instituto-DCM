<?php
include '../config.php';
$Datos = array();
$usuario = trim($_POST["USUARIO"]);
$password = trim($_POST["PASSWORD"]);
$password = encrypt_decrypt("encriptar", $password);
try {
    $sql = "SELECT * FROM USUARIOS WHERE USR_CLV='" . $usuario . "'";
    $res = mysql_query($sql, $conexion) or die(mysql_error($conexion));
    if ($row = mysql_fetch_assoc($res)) {
        if ($row["USR_PSSWRD"] == $password) {
            if ($row["USR_ACTV"] == 1) {
                $_SESSION["USR_IDINTRN"] = $row["USR_IDINTRN"];
                $_SESSION["USR_CLV"] = $row["USR_CLV"];
                $_SESSION["USR_NMBR"] = $row["USR_NMBR"];
                $_SESSION["RLS_IDINTRN"] = $row["RLS_IDINTRN"];
                $VALUES["RESULT"] = true;
                $VALUES["MESSAGE"] = "Éxito";
                $VALUES["DATA"] = $row;
            } else {
                $VALUES["RESULT"] = false;
                $VALUES["MESSAGE"] = "Su usuario de acceso no esta activo, por favor verifique con el administrador del sistema.";
                $VALUES["DATA"] = null;
            }
        } else {
            $VALUES["RESULT"] = false;
            $VALUES["MESSAGE"] = "Acceso denegado, verifique que sus datos de acceso sean correcto.";
            $VALUES["DATA"] = null;
        }
    } else {
        $VALUES["RESULT"] = false;
        $VALUES["MESSAGE"] = "Acceso denegado, verifique que sus datos de acceso sean correcto, o bien, confirme con el administrador del sistema su acceso a la plataforma.";
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