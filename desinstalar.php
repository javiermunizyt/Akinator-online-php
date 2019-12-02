<?php

//CONECTAMOS CON LA BD
require "conexion.php";

//-------------------------------------------------
$consultas = [];

//PONEMOS LAS CONSULTAS EN UN ARRAY
array_push($consultas,"DROP TABLE arbol");
array_push($consultas,"DROP TABLE partida");

//OBTENEMOS EL TAMAÑO DEL ARRAY
$tam = count($consultas);



//-------------------------------------------------

//EJECUTAMOS TODAS LAS CONSULTAS

for($a=0; $a<$tam; $a++){
	
	echo "CONSULTA: " . $a . " ";
	
	if (mysqli_query($enlace, $consultas[$a])) {
		echo "OK";
	}
	else{
		echo "ERROR";
	}
	
	echo "<br>";
}

//-------------------------------------------

/* cerrar la conexión */
mysqli_close($enlace);
?>
