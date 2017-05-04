<?php

require_once '.php';
require_once 'PHPUnit.php';

class stringtest extends PHPUnit_TestCase
{
    // contains the object handle of the string class
    var $abc;
    var $num;

    // constructor of the test suite
    function stringtest($name) {
       $this->PHPUnit_TestCase($name);
    }

    function stringtest($number) {
       $this->PHPUnit_TestCase($number);
    }

    // called before the test functions will be executed
    // this function is defined in PHPUnit_TestCase and overwritten
    // here
    function setUp() {
        // create a new instance of String with the
        // string 'abc'
        $this->abc = new ("abc");
    }

     function setUp1() {
        // create a new instance of String with the
        // string 'abc'
        $this->num= new (123);
    }

    // called after the test functions are executed
    // this function is defined in PHPUnit_TestCase and overwritten
    // here
    function tearDown() {
        // delete your instance
        unset($this->abc);
    }

function tearDown1() {
        // delete your instance
        unset($this->num);
    }
    // test the toString function
    function testToString() {
        $result = $this->abc->toString('contains %s');
        $expected = 'contains abc';
        $this->assertTrue($result == $expected);
    }

    function testToInteger() {
        $result = $this->num->(int)($num);
        $expected = 'contains 123';
        $this->assertTrue($result == $expected);
    }

    // test the copy function
    function testCopy() {
      $abc2 = $this->abc->copy();
      $this->assertEquals($abc2, $this->abc);
    }

     function testCopy1() {
      $num2 = $this->num->copy();
      $this->assertEquals($num2, $this->num);
    }

    // test the add function
    function testAdd() {
        $abc2 = new ('123');
        $this->abc->add($abc2);
        $result = $this->abc->toString("%s");
        $expected = "abc123";
        $this->assertTrue($result == $expected);
    }
  }
?>