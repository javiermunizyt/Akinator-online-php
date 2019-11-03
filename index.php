<html>

<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>


<body>

<h1>Javinator</h1>
<hr>
<br>



<?php

//CONECTAMOS CON LA BD
require "conexion.php";

//OBTENEMOS EL NÚMERO DEL NODO DENTRO DEL ÁRBOL (PARA SABER QUÉ CAMINO HEMOS TOMADO)
$nodo = $_GET["n"];

$nodoSi = $nodo * 2;
$nodoNo = $nodo * 2 + 1;


//HACEMOS LA CONSULTA A LA BD
$consulta = "SELECT texto,pregunta FROM arbol WHERE nodo = ".$nodo.";";

$texto = '';
$pregunta = true;
 
if ($resultado = mysqli_query($enlace, $consulta)) {
 
	if($resultado->num_rows === 0)
    {
        echo 'No existe el nodo';
    }

	else{
		while ($fila = mysqli_fetch_row($resultado)) {
			$texto 	  = $fila[0];
			$pregunta = $fila[1];
		}
		
		//SI NO ES UNA PREGUNTA ES UN RESULTADO FINAL (JAVINATOR DA UNA RESPUESTA)
		if($pregunta == 0){
			echo "<h2>¿Has pensado en ". $texto . "?</h2>";
			echo "<br>";
			echo "<a href='respuesta.php?r=1&n=".$nodo."&p=".$texto."'>SÍ</a> <a href='respuesta.php?r=0&n=".$nodo."&p=".$texto."'>NO</a>";
		}
		
		//SI ES UNA PREGUNTA, PREGUNTAMOS
		else{
			echo "<h2>¿Tu personaje es ". $texto . "?</h2>";
			echo "<a href='index.php?n=".$nodoSi."'>SÍ</a> <a href='index.php?n=".$nodoNo."'>NO</a>";
		}
		
	}

    mysqli_free_result($resultado);
}

?>

<br>
<br>

<hr>
<br>

</body>
</html>