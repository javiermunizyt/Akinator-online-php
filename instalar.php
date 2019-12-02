<?php

//CONECTAMOS CON LA BD
require "conexion.php";

//-------------------------------------------------
$consultas = [];

//PONEMOS LAS CONSULTAS EN UN ARRAY (TABLA)
array_push($consultas,"CREATE TABLE arbol (nodo INT NOT NULL, texto VARCHAR(500), pregunta BOOL, PRIMARY KEY (nodo));");
array_push($consultas,"CREATE TABLE partida (id INT NOT NULL AUTO_INCREMENT, personaje VARCHAR(500), acierto BOOL, PRIMARY KEY (id));");


//PONEMOS LAS CONSULTAS EN UN ARRAY (DATOS/REGISTROS)
array_push($consultas,"INSERT INTO arbol (nodo,texto,pregunta) VALUES(1,'Javier Muñiz', FALSE);");



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
