<?php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase{

         function testAdd(){
             $myCalc = new Calculator();
             $this->assertEqual($myCalc->add(1,2),3,"1 + 2");
             $this->assertEqual($myCalc->add(1,2,1),4,"3 params");
             
         }
}