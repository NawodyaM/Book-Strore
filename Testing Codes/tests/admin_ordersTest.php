<?php

require 'admin_orders.php'; 

use PHPUnit\Framework\TestCase;

class admin_ordersTest extends TestCase
{
    public function testadmin_ordersFunction() {
        $result = admin_ordersFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = admin_ordersFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>