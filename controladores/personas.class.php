<?php

class LasPersonas {
   
protected $_NOMBRE = null;
protected $_APELLIDO = null;

            

public function diceNombre(){
    return $this->_NOMBRE." ".$this->_APELLIDO;
}


}//fin de la clase
