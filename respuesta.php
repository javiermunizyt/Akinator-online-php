<?php
//CONECTAMOS CON LA BD
require "conexion.php";

//RECOGEMOS LA RESPUESTA
$respuesta = $_GET["r"];
$nodo = $_GET["n"];
$nombreAnterior = $_GET["p"];

//SI HA FALLADO
if($respuesta == 0){
	
	echo "<textarea id='nodo' name='nodo' form='formulario' placeholder='nombre' style='display:none;'>".$nodo."</textarea>";
	echo "<textarea id='nombreAnterior' name='nombreAnterior' form='formulario' placeholder='nombre' style='display:none;'>".$nombreAnterior."</textarea>";
	
	echo "<h2>¿En quién habías pensado?</h2>";
	echo "<textarea id='nombre' name='nombre' form='formulario' placeholder='nombre'></textarea>";
	echo "<h2>¿Qué característica tiene este personaje?</h2>";
	echo "<textarea id='caracteristicas' name='caracteristicas' form='formulario' placeholder='caracteristicas'></textarea>";
	
	echo "<form action='crear.php' id='formulario' method='POST' >";
	echo "<button type='submit' name='ENVIAR'>ENVIAR</button>";
	echo "</form>";

}

//SI HA ACERTADO
else{
	echo "<h2>¡GRACIAS POR JUGAR A JAVINATOR! ;)</h2>";
	echo "<br><br>";
	echo "<a href='index.php?n=1'>Volver a desafiarme</a>";
}


?>