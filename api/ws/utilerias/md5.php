<?php
include '../../config.php';

if($_GET["encriptar"] != ""){
	echo "Encriptado = ".encrypt_decrypt("encriptar", $_GET["encriptar"]);
} else if($_GET["desencriptar"] != "") {
	echo "Desencrpitado = ".encrypt_decrypt("desencriptar", $_GET["desencriptar"]);
}

?>