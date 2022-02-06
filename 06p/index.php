<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>

        <div class="contenido">
        <?php
          echo "10+20= " . (10 + 20);
        ?>
          <hr>

        <?php

          $numero1 = 10;
          $numero2 = 20;
          $numero3 = 30;
          $numero4 = 40;
          //suma
          echo $numero1 + $numero2;
          echo "<hr>";
          //resrta
           echo $numero4 - $numero3;
           echo "<hr>";
          //mnulti
          echo $numero1 * $numero2;
          echo "<hr>";
          //div
            echo $numero4 / $numero1;
            echo "<hr>";
           //parentesis
           echo ($numero1 + $numero2) * ($numero1 *  0.16);
           echo "<hr>";
          //incrementos por 1 
          $numero1++;
           echo $numero1;
           echo "<hr>";
           //decrementos por 1 
          $numero1--;
          echo $numero1;
          echo "<hr>";
          //incrementos en la misma variable
            $total =0;
            $total += 10;
            $total += 20;
            echo $total;
            echo "<hr>";
          //decrementos en la misma variable
             $total =50;
             $total -= 10;
             $total -= 10;
             echo $total;
             echo "<hr>";
        //modulo - residuo
          echo 20% 3;
        
             
      
          


        ?>

              
        </div>
    </div>




  </body>
</html>
