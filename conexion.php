<?php 
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Allow-Methos: PUT, GET, HEAD, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: X-Requested-With');
	header('Content-Type: application/json; charset=utf8');

	$conexion = mysqli_connect('localhost','root','','escuela') or die('Error de conexión');

 ?>
