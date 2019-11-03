<?php

$mysql_host = "localhost";

//EN LOCAL
$mysql_usuario = "root";
$mysql_passwd = "rootpass";
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
