<?php

require 'admin_contacts.php'; 

use PHPUnit\Framework\TestCase;

class admin_contactsTest extends TestCase
{
    public function testadmin_contactsFunction() {
        $result = admin_contactsFunction('expected_value'); 
        $this->assertEquals('expected output', $result); 

        $result = admin_contactsFunction('unexpected_value'); 
        $this->assertEquals('unexpected output', $result); 
    }
}
?>