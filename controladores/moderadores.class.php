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

public function diceGanador($entredas/*arreglo*/,$total)
{
  $resultados = array();
 for($i=1;$i <= count($entredas); $i++)
 {
 $resultados[$i]= $total-$entredas[$i];  
 }   
       
 return $resultados;
}



}
