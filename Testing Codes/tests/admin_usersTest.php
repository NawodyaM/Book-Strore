<?php

require 'admin_users.php'; 

use PHPUnit\Framework\TestCase;

class admin_usersTest extends TestCase
{
    public function testadmin_usersFunction() {
        $result = admin_usersFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = admin_usersFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>