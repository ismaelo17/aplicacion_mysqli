<?php
	$host = "localhost";
	$basededatos = "app2";
	$usuariodb = "root";
	$clavedb = "root";
	$tabla1 = "provincias";
	$tabla2 = "municipios";
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
	if ($conexion->connect_errno) {
		echo "Error de conexión";
		exit();
	}
?>