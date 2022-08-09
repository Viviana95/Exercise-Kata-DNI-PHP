<?php 

namespace Tests;

use App\Dni;
use PHPUnit\Framework\TestCase;

class DniTest extends TestCase
{
   
    public function test_length_dni()
    {
       $dniInsert= new Dni;
       $dniCorrect = $dniInsert->lengthDni();
       $this->assertEquals($dniCorrect, $dniInsert->construct());
            
    }
    
    public function test_first_characters_are_numbers()
    {
        $dniInsert= new Dni;
        $charactersNumber = $dniInsert->charactersNumber();
        $this->assertEquals($charactersNumber,$dniInsert->construct());
    }
    
}

?>