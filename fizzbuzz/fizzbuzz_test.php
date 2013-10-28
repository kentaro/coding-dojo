<?php

require_once("../simpletest/autorun.php");
require_once("../simpletest/unit_tester.php");
require_once("../simpletest/reporter.php");

require_once("fizzbuzz.php");

class TestFizzBuzz extends UnitTestCase {
    function testDetect()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEqual($fizzbuzz->detect(1), 1);
        $this->assertEqual($fizzbuzz->detect(2), 2);
        $this->assertEqual($fizzbuzz->detect(3), "Fizz");
    }
}
