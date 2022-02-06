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
        <?php //revisar que existe un elemento en un arreglo
          $tecnologias = array('css','html','java','jquery');
          $existe = in_array('java',$tecnologias);
        ?>
        <pre>
        <?php print_r($existe); ?>
        </pre>
        <pre>
        <?php var_dump($existe); ?>
        </pre>

        <?php  
         $persona = array(
           'nombre' => 'juan',
           'pais ' => 'mexico',
           'profesion' => 'desarrllador web'
         );  
        ?>
        <?php $existe2 = array_values($persona); //convierto en arreglo de numeros?>
        <pre>
        <?php var_dump($existe2); ?>
        </pre>
        <?php $existe2 = in_array('juan',array_values($persona));//verifico si esta el valor ?>
        <pre>
        <?php var_dump($existe2); ?>
        </pre>


              
        </div>
    </div>




  </body>
</html>
