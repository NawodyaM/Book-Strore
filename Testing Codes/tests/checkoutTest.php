<?php

require 'checkout.php'; 

use PHPUnit\Framework\TestCase;

class checkoutTest extends TestCase
{
    public function testcheckoutFunction() {
        $result = checkoutFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = checkoutFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>