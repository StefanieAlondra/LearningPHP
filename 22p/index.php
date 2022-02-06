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
        function usuario($nombre = "sin n", $tel = '0000-0000'){
          return $contacto = $nombre . ' ' . $tel;
        }
        $usuario = usuario('Juan', '1234-5678');
        echo $usuario;
        echo '<hr>';
        $usuario2 = usuario('3478');
        echo $usuario2;
        echo '<hr>';
     
        ?>

              
        </div>
    </div>




  </body>
</html>
