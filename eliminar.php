<?php 
	
	include 'conexion.php';
	$input = file_get_contents('php://input');
	$mensaje = [];

	$codigo = $_GET['codes'];

	$consulta = mysqli_query($conexion,"DELETE FROM alumno WHERE usuario='$codigo'");

	if ($consulta) {
		http_response_code(201);
		$mensaje['status'] = 'Realizado';
	}else{
		http_response_code(422);
		$mensaje['status'] = 'Error';
	}

	echo json_encode($mensaje);
	echo mysqli_error($conexion);

 ?>
