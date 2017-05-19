<?php
class Calculator{
    public $a=0;
    public $b=0;
    function __construct($x,$y){
        $this->a=$x;
        $this->b=$y;
    }
    function add(){
        $sum=$this->a+$this-> b;
        echo $sum.'<br/>';
    }
    function mul(){
        $sum=$this->a*$this-> b;
        echo $sum.'<br/>';
    }
    function sub(){
        $sum=$this->a-$this-> b;
        echo $sum.'<br/>';
    }
    function __destruct(){
        unset($a);
        unset($b);
        echo "I am Destroying"."<br/>";
    }
}
$calc1=new Calculator(7,3);
$calc1->add();
unset($calc1);
$calc2=new Calculator(10,3);
$calc2->mul();
$calc3=new Calculator(20,3);
$calc3->sub();