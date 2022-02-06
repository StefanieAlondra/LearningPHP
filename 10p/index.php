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
          $tecnologuas = ['css','html','java','jquery'];//arreglo indexado
        ?> 
        <pre>
          <?php    print_r($tecnologuas);  ?> 
        <pre>
         
        <?php
          $lenguajes  = array('css','html','java','jquery',20);
          echo $lenguajes[1]; 
        ?>
         <pre>
          <?php    var_dump($lenguajes);  ?> 
        <pre>

              
        </div>
    </div>




  </body>
</html>
