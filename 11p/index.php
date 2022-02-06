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
        <?php  print_r($tecnologuas); ?>
        </pre>

        <?php 
          $tecnologuas[] = 'pyton';
          $tecnologuas[5] = 'otro';
        ?>

        <pre>
        <?php  print_r($tecnologuas); ?>
        </pre>

        <?php // borra ultimo elemento y traerlo en varibvale ?>
        <?php ?>
        <?php $otro = array_pop($tecnologuas); ?>
        <h1><?php echo $otro; ?></h1>
        <pre>
        <?php  print_r($tecnologuas); ?>
        </pre>

        <?php // remover primer elemento del arreglo ?>
        <?php unset($tecnologuas[0]); ?>

        <pre>
        <?php  print_r($tecnologuas); ?>
        </pre>

        <?php // remover primer elemento del arreglo y ponerlo en variable ?>
        <?php $html = array_shift($tecnologuas); ?>
        <h1><?php echo $html; ?></h1>
        <pre>
        <?php  print_r($tecnologuas); ?>
        </pre>


        <?php // remover ciertos elementos y agregar otros ?>
        <?php $array = array_splice($tecnologuas, 1,1,'anguklar'); ?>
        <pre>
        <?php  print_r($array); ?>
        </pre>
        <pre>
        <?php  print_r($tecnologuas); ?>
        </pre>

              
        </div>
    </div>




  </body>
</html>
