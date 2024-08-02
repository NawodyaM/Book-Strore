<?php

require 'cart.php'; 

use PHPUnit\Framework\TestCase;

class cartTest extends TestCase
{
    public function testcartFunction() {
        $result = cartFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = cartFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>