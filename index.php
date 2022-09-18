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
          <h2>Pregunta</h2>

          <?php
            //que s conecte con la base de trader_cdlrisefall3methods
            require'conexion.php';
            //tiene que recibir el numero del nodo de la str_ireplace
            $nodo = 1;
            if(isset($_GET['n'])){
              $nodo = $_GET['n'];
            }

            //Calcular los siguientes nodos
            $nodoSi = $nodo*2;
            $nodoNo = $nodo*2+1;

            //echo "nodo actual: ".$nodo;

          ?>

          <?php
          //consulta bd
          $consulta = "SELECT texto,pregunta FROM arbol WHERE nodo=".$nodo.";";
          $texto = '';
          $pregunta = true;
          $resultado;

          if($resultado=mysqli_query($enlace,$consulta)){
            if($resultado->num_rows == 0){
              echo 'Error - el nodo no existe OAO';
            }
            else{
              //Esto pasara solamente cuandono haya ningun tipo de error
              while($fila = mysqli_fetch_row($resultado)){
                $texto = $fila[0];
                $pregunta = $fila[1];
              }

              if($pregunta == FALSE){
                echo "<div class='contenedorPregunta'>";
                echo "<h3>¿Tu personaje es ".$texto."?</h3>";
                echo "</div>";

                echo "<div class='contenedorRespuestas'>";
                echo "<a class='boton' href='respuesta.php?n=".$nodo."&r=1&nom=".$texto."&p=0'>SÍ</a>";
                echo "<a class='boton' href='respuesta.php?n=".$nodo."&r=0&nom=".$texto."&p=1'>NO</a>";
                echo "</div>";
              }
              else{
                echo "<div class='contenedorPregunta'>";
                echo "<h3>¿Tu personaje tiene la caracteristica de ".$texto."?</h3>";
                echo "</div>";
                echo "<div class='contenedorRespuestas'>";
                echo "<a class='boton' href='index.php?n=".$nodoSi."'>SÍ</a>";
                echo "<a class='boton' href='index.php?n=".$nodoNo."'>NO</a>";

                echo "</div>";
              }




            }//fin else

          }

           ?>


        </main>

        <div class='limpiar'></div>

        <br>
        <br>

        <footer>
          <a href='index.php'>Volver a probar</a>
        </footer>

    </body>
</html>
