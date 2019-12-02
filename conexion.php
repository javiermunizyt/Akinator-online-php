<?php

$mysql_host = "localhost";

//----------------------------------------------------------------
//CAMBIA LOS SIGUIENTES DATOS DE CONEXIÓN A LA BD POR LOS TUYOS
$mysql_usuario = "root";
$mysql_passwd = "rootpass";
//----------------------------------------------------------------

//CREA LA SIGUIENTE BASE DE DATOS EN MYSQL
$mysql_bd = "javinator";



$enlace = mysqli_connect($mysql_host, $mysql_usuario, $mysql_passwd, $mysql_bd);

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}


//HACEMOS QUE LOS CARACTERES SE VEAN TODOS (UTF8)
mysqli_set_charset($enlace,"utf8");

?>
