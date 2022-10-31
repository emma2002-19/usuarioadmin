<?php 
$contrasena = "c1BJQEZor84xbtKcyXZS";
$usuario = "u96tjwuzms1vaze0";
$nombre_bd = "bv9rawwwx8j4ytmlgh58";

try {
	$bd = new PDO (
		'mysql:host=bv9rawwwx8j4ytmlgh58-mysql.services.clever-cloud.com;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>