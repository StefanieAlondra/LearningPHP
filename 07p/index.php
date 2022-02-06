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
         if(1<2){
           echo "1 es menor ";
         } else {
           echo "1 es mayor";
         }
         echo "<hr>";

         $edad1 = 11;
         $edad2 = 11;
         if ($edad1 < $edad2){
           echo "la edad 1 es menor";
         }elseif($edad1 == $edad2){
           echo "son iguales";
         }else{
           echo "la edad 2 es menor";
         }
         echo "<hr>";

         $numero1 = 4;
         if ($numero1 % 2 == 0){
           echo " el numerp es par";
         }else{
           echo "el nunmero es inpar";
         }

        ?>

              
        </div>
    </div>




  </body>
</html>
