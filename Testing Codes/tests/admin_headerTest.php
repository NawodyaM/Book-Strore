<?php

require 'admin_header.php'; 

use PHPUnit\Framework\TestCase;

class admin_headerTest extends TestCase
{
    public function testadmin_headerFunction() {
        $result = admin_headerFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = admin_headerFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>