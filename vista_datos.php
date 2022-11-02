<?php 
	include 'conexion.php';
	$datos = [];
	$consulta = mysqli_query($conexion,"SELECT * FROM alumno");
	while($fila = mysqli_fetch_object($consulta)){
		$datos[] = $fila;
	}

	echo json_encode($datos);
	echo mysqli_error($conexion);

 ?>
