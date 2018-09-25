<?php
include "../../api/config.php"; 
if($_SESSION["USR_IDINTRN"] == ""){
    header("location: ../../");
}
else {
    $URL = "https://dcm.esmasqueweb.com/"; 
}
$menu = '';
$sql = "SELECT  MODULOS.*,
          MODULOS.MDL_IDINTRN AS IDMODULO
          FROM MODULOS 
          INNER JOIN PROGRAMAS ON PROGRAMAS.MDL_IDINTRN = MODULOS.MDL_IDINTRN
          INNER JOIN PROGRAMA_ROL ON PROGRAMA_ROL.PRG_IDINTRN = PROGRAMAS.PRG_IDINTRN 
              AND PROGRAMA_ROL.RLS_IDINTRN = ".$_SESSION["RLS_IDINTRN"]."
          GROUP BY IDMODULO
          ORDER BY MODULOS.MDL_ORDN ASC ";
$res = mysql_query($sql, $conexion) or die(mysql_error($conexion));
while($row = mysql_fetch_assoc($res)){
      $link = "";
      if($row["MDL_URLMDL"] == "javascript:;"){
        $link = $row["MDL_URLMDL"];
      } else {
        $link = $URL.$row["MDL_URLMDL"];
      }
 $menu .=  '
      <li class="">
        <a href="'.$link.'"><span class="title">'.$row["MDL_TTL"].'</span><span class=" open  arrow"></span></a>
        <span class="icon-thumbnail"><i class="'.$row["MDL_ICN"].'"></i></span>
        <ul class="sub-menu">
 ';
  $sqlPrg = "SELECT PROGRAMAS.*,
                MODULOS.*
              FROM PROGRAMAS 
              INNER JOIN MODULOS ON PROGRAMAS.MDL_IDINTRN = MODULOS.MDL_IDINTRN
              INNER JOIN PROGRAMA_ROL ON PROGRAMA_ROL.PRG_IDINTRN = PROGRAMAS.PRG_IDINTRN 
                  AND PROGRAMA_ROL.RLS_IDINTRN = ".$_SESSION["RLS_IDINTRN"]."
              WHERE PROGRAMAS.MDL_IDINTRN=".$row["MDL_IDINTRN"]." AND PROGRAMAS.PRG_ACTV=1";
  $resPrg = mysql_query($sqlPrg, $conexion) or die(mysql_error($conexion));
  while($rowPrg = mysql_fetch_assoc($resPrg)){
      $link = "";
      if($rowPrg["PRG_URLPRGRM"] == "javascript:;"){
        $link = $rowPrg["PRG_URLPRGRM"];
      } else {
        $link = $URL.$rowPrg["PRG_URLPRGRM"];
      }
     $menu .=  '
        <li class="">
          <a href="'.$link.'">'.$rowPrg["PRG_NMBR"].'</a>
          <span class="icon-thumbnail">'.substr($rowPrg["PRG_NMBR"], 0, 2).'</span>
        </li>

     ';
  }
  $menu .= ' </ul>
  </li>
  ';
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Instituto DCM | Administración</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="../../assets/assets/img/logo_dcm_3.png" />
    <link href="https://file.myfontastic.com/e6SDyofH6dfHEbHhihTA54/icons.css" rel="stylesheet" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Plataforma de administración y control escolar desarrollado para el Instituto de Estudios Superiores DCM" name="description" />
    <meta content="Rosvel Servicios Multimedia SA de CV" name="author" />
    <link href="../../assets/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../assets/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../assets/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../assets/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="../../assets/pages/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
    <link href="assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
    <![endif]-->
  </head>