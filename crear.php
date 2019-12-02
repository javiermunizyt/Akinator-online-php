<?php
//CONECTAMOS CON LA BD
require "conexion.php";

//RECOGEMOS EL MENSAJE
$nodo 		     = $_POST['nodo'];
$nombre 		 = $_POST['nombre'];
$caracteristicas = $_POST['caracteristicas'];
$nombreAnterior  = $_POST['nombreAnterior'];


//NUEVOS NODOS
$NumHijoI = $nodo * 2;
$NumHijoD = $nodo * 2 +1;
	
//TEXTOS
$NombreHijoI = $nombre;
$NombreHijoD = $nombreAnterior;

//PREGUNTA
$pregunta = $caracteristicas;


//GUARDAMOS EN LA BD LA NUEVA INFORMACIÓN

$consulta = "INSERT INTO arbol (nodo,texto,pregunta) VALUES('".$NumHijoI."','".$nombre."',FALSE);";
mysqli_query($enlace, $consulta);

$consulta = "INSERT INTO arbol (nodo,texto,pregunta) VALUES('".$NumHijoD."','".$nombreAnterior."',FALSE);";
mysqli_query($enlace, $consulta);

$consulta = "UPDATE arbol SET texto = '".$caracteristicas."',pregunta = TRUE WHERE nodo = '".$nodo."';";
mysqli_query($enlace, $consulta);


//----------------------------------------------
//GUARDAMOS EL LOG DE LA PARTIDA
$consulta = "INSERT INTO partida (personaje,acierto) VALUES('".$nombre."',FALSE);";
mysqli_query($enlace, $consulta);


//VOLVEMOS A LA PÁGINA PRINCIPAL
header("Location:index.php?n=1&r=0");

?>