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
        <?php //arreglos multidimensionales
            $persona = array(
              'datos' => array (
                'nombre' => 'juan',
                'pais' => 'mexico',
                'nombprefesionre' => 'doc'
              ),
              'leguajes' => array(
                'frontend' => array('css','html','javscript','jquery'),
                'backend' => array('php','misql','phyton'),
              )
            );
        ?>
          <?php ?>
          <pre>
          <?php  var_dump($persona)?>
          </pre>
          <pre>
          <?php  print_r($persona)?>
          </pre>
          <pre>
          <?php  print_r($persona['datos'])?>
          </pre>
          <pre>
          <?php  print_r($persona['leguajes']['frontend'][3])?>
          </pre>


              
        </div>
    </div>




  </body>
</html>
