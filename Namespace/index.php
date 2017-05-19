<?php
//include 'Bitm.php';
function __autoload($className){
    echo $className.'<br/>';
   //echo "I am in autoload";
    include $className.'.php';
}
use \Basis\Bitm;
$obj=new Bitm();
echo $obj->addition(10,10);