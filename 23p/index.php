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
          $agenda = array();
       
          function guardarUsuarios($nombre, $tel){
            global $agenda;//acceder a la variablo global
            $agenda[]= array($nombre ,$tel);
          }
          guardarUsuarios("huan","1234-678");
          guardarUsuarios("miguel","5678-907");
          guardarUsuarios("alma","9101-456");

          function mostrarUsuario($id){
            global $agenda;
            $usuario = $agenda[$id];
            foreach($usuario as $user){
              echo $user . '<br>';
            }

          }

          // echo "<pre>";
          // var_dump($agenda);//recorre el arreglo
          // echo "</pre>";
          mostrarUsuario(1);

        ?>

              
        </div>
    </div>




  </body>
</html>
