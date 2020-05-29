<?php
	//conexion
	$host='localhost';
	$user='root';
	$pass='';
	$db='asistencia';
	$con=mysqli_connect($host,$user,$pass,$db) or die ('<div class="error">Error al conectar con la base de datos</div>');
?>