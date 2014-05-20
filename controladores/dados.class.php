<?php


class LosDados {
    
    
    private $_LADOS = null;
    public  $_TEMA = null;
    
    
    public function __construct($lados=6,$tema="black/white") {
    $this->_LADOS = $lados;
    $this->_TEMA=$tema;                  
        
    }

    protected function Moverse(){
       return $valor = rand(1,  $this->_LADOS);
   }
    
   public function queladoEs($lado)
    {
       $cara = "";
       switch ($lado)
       {
        case 1:
            $cara="uno.png";
            break;
        case 2:
            $cara="dos.png";
            break;
        case 3:
            $cara="tres.png";
            break;
        case 4:
            $cara="cuatro.png";
            break;
        case 5:
            $cara="cinco.png";
            break;
        case 6:
            $cara="seis.png";
            break;
       }     
       return $cara;
           }
  

   















}
