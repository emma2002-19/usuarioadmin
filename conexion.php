<?php 
$contrasena = "LCwkOqSdGnZdt7oV85eN";
$usuario = "uzfx556rzr7pnrup";
$nombre_bd = "biwxjacm4xb2kgw3oblt";

try {
	$bd = new PDO (
		'mysql:host=biwxjacm4xb2kgw3oblt-mysql.services.clever-cloud.com;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>