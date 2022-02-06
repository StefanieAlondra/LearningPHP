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
        <?php //arreglo asociativo 
         $persona = array(
           'nombre' => 'juan',
           'pais ' => 'mexico',
           'profesion' => 'desarrllador web'
         );  
        ?>
        <pre>
        <?php print_r($persona); ?>
        </pre>

        <?php echo $persona['nombre'] ?>

        <pre>
        <?php print_r(array_values( $persona));//lo convierte en el de numeros ?>
        </pre>
        <pre>
        <?php print_r(array_keys( $persona));//regresa las llaves  ?>
        </pre>

              
        </div>
    </div>




  </body>
</html>
