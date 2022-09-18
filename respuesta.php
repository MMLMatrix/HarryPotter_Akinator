<html>

  <head>
    <title>Harry Potter Akinator</title>
    <link rel='stylesheet' type='text/css' href='css/modelo.css'>
  </head>

  <body>
    <header>
      <h1>Adivinador de personajes de Harry Potter</h1>
    </header>

    <main>

      <?php
        require'conexion.php';

        $nodo = $_GET['n'];
        $respuesta = $_GET['r'];
        $nombre = $_GET['nom'];
        $atinar = $_GET['p'];

        /*echo "Nodo: ".$nodo;
        echo "<br>";
        echo "Respuesta ".$respuesta;
        */
        if($atinar == TRUE){

        function formularioRespuesta($n,$preg,$nom){
          echo "<div class='contenedorPregunta'>";
          echo "<textarea id='nodo' name ='nodo' form='formulario', style='display:none;'>".$n."</textarea>";
          echo "<textarea id='nombreAnt' name ='nombreAnt' form='formulario', style='display:none;'>".$nom."</textarea>";

          echo "<h3>¿En que personaje del mundo de Harry Potter pensabas?</h3>";
          echo "<textarea id='nombre' name ='nombre' form='formulario' placeholder='Nombre'></textarea>";

          echo "<h3>¿Que tiene ese personaje que ".$nom." no tenga?</h3>";
          echo "<textarea id='caracteristicas' name ='caracteristicas' form='formulario' placeholder='Caracteristicas'></textarea>";

          echo "<form action='crear.php' id='formulario' method='POST'>";
          echo "<button type ='submit' name='Enviar'>ENVIAR</button>";
          echo "</form>";

          echo "</div>";
          }
          formularioRespuesta($nodo,$respuesta,$nombre);
        }
        else{
          echo "<div class='contenedorPregunta'>";
          echo "<h3>Wuuju!, he acertado!!\n ".$nombre."!!</h3>";
          echo "</div>";

          echo "<footer>";
            echo "<a href='index.php'>Volver a probar</a>";
          echo "</footer>";
        }




      ?>

    </main>
  </body>
</html>
