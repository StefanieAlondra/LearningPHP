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
                'backend' => array('php','misql','phyton')
              )
            );
        ?>
        

          <h2>FORECH ARREGLOS MULTIDIMENSIONALES</h2>
          <ul>
              <?php foreach($persona['datos'] as $person): ?>
              <li><?php  echo $person;?></li>
              <?php endforeach;?>

              <?php foreach($persona as $lenguaje): ?>
                <?php if(array_key_exists('frontend',$lenguaje)):?>
                  <h2>Lenguajes de Frontend</h2>
                    <?php foreach ($lenguaje['frontend'] as $front):?>
                      <li> <?php echo $front;?></li>
                    <?php endforeach;?>
                <?php endif;?>
              <?php endforeach;?>

              <?php foreach($persona as $lenguaje): ?>
              <?php if(array_key_exists('backend',$lenguaje)):?>
                  <h2>Lenguajes de backend</h2>
                    <?php foreach ($lenguaje['backend'] as $back):?>
                      <li> <?php echo $back;?></li>
                    <?php endforeach;?>
                <?php endif;?>
              <?php endforeach;?>
          </ul>


          
          <pre><?php print_r($persona) ;?></pre>



        </div>
    </div>




  </body>
</html>
