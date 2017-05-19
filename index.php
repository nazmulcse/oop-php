<?php
  class Calculator{
      function add($x,$y){
          $sum=$x+$y;
          return $sum;
      }
  }
$calculator=new Calculator();
echo $calculator->add(3,5);