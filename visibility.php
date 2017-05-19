<?php
class Sample{
    public $a="My Public info";
    protected $b="My protected Info";
    private $c="My private info";
    public function display(){
        echo $this->a;
        echo '<br/>';
        echo $this->b;
        echo '<br/>';
        echo $this->c;
        echo '<br/>';
    }
}
class Sample2 extends Sample{
    function MyProtected(){
        return $this->b;
    }
}
$obj=new Sample();
echo $obj->a;
echo '<br/>';
$obj->display();
$obj2=new Sample2();
$obj2->display();
echo $obj2->MyProtected();