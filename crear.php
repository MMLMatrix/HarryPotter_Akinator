<?php
  require'conexion.php';

  $nodo =$_POST['nodo'];
  $nombre =$_POST['nombre'];
  $caracteristicas =$_POST['caracteristicas'];
  $nombreAnt = $_POST['nombreAnt'];
  //nuevos nodoS
  $numHijoI = $nodo*2;
  $numHijoD = $nodo*2+1;

  //bind_textdomain_codeset
  $nombreHijoI = $nombre;
  $nombreHijoD = $nombreAnt;

  //Pregunta
  $pregunta = $caracteristicas;

  //guardamos la info en bd
  $consulta = "INSERT INTO arbol (nodo,texto, pregunta) VALUES('".$numHijoI."','".$nombreHijoI."',FALSE);";
  mysqli_query($enlace,$consulta);

  $consulta = "INSERT INTO arbol (nodo,texto, pregunta) VALUES('".$numHijoD."','".$nombreHijoD."',FALSE);";
  mysqli_query($enlace,$consulta);

  $consulta = "UPDATE arbol SET texto = '".$pregunta."', pregunta = TRUE WHERE nodo = '".$nodo."'";
  mysqli_query($enlace,$consulta);

  //VOLVER a la pagina principal o si tu quieres agrega una ultima de felicitaciones
  header("Location: index.php");

 ?>
