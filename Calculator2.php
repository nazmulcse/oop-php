<?php
class Calculator{
    function __construct()
    {
        echo "Calculator is Ready"."<br/>";
    }
    function add($x,$y)
    {
        $sum=$x+$y;
        return $sum;
    }
}
$calculator=new Calculator();
echo $calculator->add(3,5);