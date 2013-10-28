<?php

require_once("../simpletest/autorun.php");
require_once("../simpletest/unit_tester.php");
require_once("../simpletest/reporter.php");

class TestFizzBuzz extends UnitTestCase {
    function test1()
    {
        $this->assertEqual(1, 1);
    }
}
