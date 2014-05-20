<?php

require_once 'dados.class.php';

class Moderador extends LosDados {
   
public function avientalosDados(){
    return parent::Moverse();  
}
    
public function Resultados($valores /*Arreglo*/)
{
   return array_sum($valores); 
}

public function diceGanador($entradas/*arreglo*/,$total)
{
  $resultados = array();
  foreach ($entradas as $key => $value) {
      $resultados[$key]= $value -$total;
  }  
       
 return $resultados;
}



}
