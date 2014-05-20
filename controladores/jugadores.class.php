<?php
require_once 'personas.class.php';

class LosJugadores extends LasPersonas {
    
    
    
public function cualestuNombre($nombre,$apellido)
            {
            $this->_APELLIDO = $apellido;
            $this->_NOMBRE = $nombre;
            print parent::diceNombre();
            }


    public function Crearjuego($nombre,$apeido) {    
        
        
    }
    

            
            
            
    public function Introducirnumero($valor) {
    
    }
    
    
    
    
      
    
    
    
    
    
    
    
    
    
   
}//fin de clase
