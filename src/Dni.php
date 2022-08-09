<?php 

namespace App;

use DomainException;

class Dni {
    
    private string $dni=""; 

    public function construct()
{
 // return $this->dni="";
}

public function lengthDni(){
    
    if(strlen($this->dni)===9){
          return "OK";
    } 
   
       
}
public function charactersNumber(){
   $numbers= substr($this->dni, 0, -1);
{
    
  }
}
}

?>