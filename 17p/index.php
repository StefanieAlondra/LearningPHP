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


            <?php //for loops ?>  
            <?php  ?> 

            <?php   $tecnologias = array ('css','html','java','jquerr','pthon');?>  
            <?php  for($i = 0 ; $i < count($tecnologias); $i++) {
              echo $tecnologias[$i] . '<br>';
            } ?>   



            <?php for ($i=0; $i <= 100 ; $i++) {
              echo $i . '<br/>';
              }?> 
            <hr>
            <?php for ($i=0; $i <= 100 ; $i++) {
              if($i == 5){
                echo "cinco <br>";
                continue;
                //break;
              }
              echo $i . '<br/>';
              }?> 

            <?php for ($i=0; $i <= 500 ; $i++) {
              if($i %2 == 0 ){
                echo $i . '<br>';
              }
            }?> 


        </div>
    </div>




  </body>
</html>
