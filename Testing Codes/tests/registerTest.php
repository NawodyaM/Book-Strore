<?php

require 'register.php'; 

use PHPUnit\Framework\TestCase;

class registerTest extends TestCase
{
    public function testregisterFunction() {
        $result = registerFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = registerFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>
