<?php
session_start();
error_reporting(1);
$horas = "+ 0 hours"; //horas
// Establecemos zona horaria
date_default_timezone_set('America/Mexico_City');
setlocale(LC_ALL, "es_ES");

/* MYSQL */
$phHost = "64.37.62.19"; // 64.37.62.19
$phUserDb = "jznlnoax_dcm_user";
$phPassDb = "smr1109158z8";
$phDb = "jznlnoax_dcm";

$conexion = mysql_connect("$phHost", "$phUserDb", "$phPassDb");
mysql_query('SET SQL_BIG_SELECTS=1');
mysql_query("SET NAMES 'utf8'");
if (!$conexion) {
    echo "No ha sido posible establecer la conexión con la Base de Datos.";
} else {
    mysql_select_db($phDb);
}

// Arreglos para Formato de Fecha
$dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$meses2 = array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");


function getGUID() {
    $remove = array("{", "}");
    if (function_exists('com_create_guid')) {
        return str_replace($remove, "", com_create_guid());
    } else {
        mt_srand((double) microtime() * 10000); //optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45); // "-"
        $uuid = substr($charid, 0, 8) . $hyphen
                . substr($charid, 8, 4) . $hyphen
                . substr($charid, 12, 4) . $hyphen
                . substr($charid, 16, 4) . $hyphen
                . substr($charid, 20, 12);
        return str_replace($remove, "", $uuid);
    }
}


// Encriptacion  MD5
$cryptKey  = 'smr1109158z8';
$secretiv = 'R0$V3L';

function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = $cryptKey;
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if($action == 'encriptar' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if($action == 'desencriptar' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

?>