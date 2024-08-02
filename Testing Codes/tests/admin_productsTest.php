<?php

require 'admin_products.php'; 

use PHPUnit\Framework\TestCase;

class admin_productsTest extends TestCase
{
    public function testadmin_productsFunction() {
        $result = admin_productsFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = admin_productsFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>