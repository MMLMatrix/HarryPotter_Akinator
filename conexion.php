<?php

$mysql_host = "localhost";
$mysql_usuario = "root";
$mysql_passwd = "";
$mysql_bd = "hq_harrypotter";

$enlace = mysqli_connect($mysql_host,$mysql_usuario,$mysql_passwd,$mysql_bd);
/*debes comprobar la conexion*/
if(mysqli_connect_errno()){
  printf("Ha fallado ;( %s\n",mysqli_connect_errno());
  exit();
}

mysqli_set_charset($enlace,'utf8');

 ?>
