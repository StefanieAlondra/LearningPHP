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
        <h2>AGENDA TELEFONICA</h2>

        <?php
        function usuario($nombre, $tel){
          echo  $nombre . " <br/>";
          echo  $tel ." <br/>";
          echo '<hr>';
        }
        usuario('Juan', '1234-5678');
        usuario('Carlos', '4534-5678');
        usuario('Pepe', '6666-5678');
        usuario('Tono', '7894-5678');
        ?>

              
        </div>
    </div>




  </body>
</html>
