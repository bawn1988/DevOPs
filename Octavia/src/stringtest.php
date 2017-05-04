<?php

equire_once 'testcase.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("StringTest");
$suite1 = new PHPUnit_TestSuite("IntegerTest");
$result = PHPUnit::run($suite);
$result1 = PHPUnit::run($suite1);

echo $result -> toString();
echo $result1 -> (int)$result1;

?>