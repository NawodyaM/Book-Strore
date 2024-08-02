<?php

require 'contact.php'; 

use PHPUnit\Framework\TestCase;

class contactTest extends TestCase
{
    public function testcontactFunction() {
        $result = contactFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = contactFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>