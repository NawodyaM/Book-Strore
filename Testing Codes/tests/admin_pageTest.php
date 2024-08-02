<?php

require 'admin_page.php'; 

use PHPUnit\Framework\TestCase;

class admin_pageTest extends TestCase
{
    public function testadmin_pageFunction() {
        $result = admin_pageFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = admin_pageFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>