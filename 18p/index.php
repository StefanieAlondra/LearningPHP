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
        <?php $premiere_leage = array ('yo','que','se','cual','es','ese');?>

        <?php $i = 0; //inicial el incfemento ?>
        <?php while($i <= count($premiere_leage)) {
            if(count($premiere_leage) > 0){
              echo $premiere_leage[$i] . '<br>'; 
              if($i+1 === count($premiere_leage)){ //para que al llegar al ultimo loe sume uno y no falte 
                echo 'fin';
              }
            } else {
              echo 'no hay resultados ';
            }
            $i++;

        }?>

        <?php ?>

              
        </div>
    </div>




  </body>
</html>
