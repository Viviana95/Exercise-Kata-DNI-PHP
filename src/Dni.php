<?php 

namespace App;

use DomainException;

class Dni {
    
    private string $dni;   
    public function construct()
{
  return $this->dni="";
}

public function lengthDni(){
    
    if(strlen($this->dni)===9){
          return "OK";
    } 
       
}
}

?>