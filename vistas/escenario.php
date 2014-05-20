<html>
    <head>
        <title></title>
    </head>
    <body>
<?php
 
include_once '../controladores/moderadores.class.php';
$susy = new Moderador();
  $valores = array();      
  for($i=1;$i <= 2 ;$i++)
  {
       $valores[$i]=$susy->avientalosDados();  
          echo "<img src='../utilerias/img/".$susy->queladoEs($valores[$i])."'/>";
  }
      echo $total = $susy->Resultados($valores);
      $entradas = array('jesus'=>6 , 'raul'=>5,"enrique" => 7 );
      var_dump($susy->diceGanador($entradas, $total));
      
  ?>
    </body>
</html>