<?php
class MyTest extends PHPUnit_Framework_TestCase
{
    public function testBar() {
        include "org/sample/app.php";
        $this->fail("we will fail");
    }	
}