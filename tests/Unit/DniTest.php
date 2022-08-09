<?php 

namespace Tests;

use App\Dni;
use PHPUnit\Framework\TestCase;

class DniTest extends TestCase
{
   
    public function test_length_dni()
    {
       $dniInsert= new Dni;
       $dniInsert->construct();
       $dniCorrect = $dniInsert->lengthDni();
       $this->assertEquals($dniCorrect, $dniInsert->construct());
            
    }
}

?>