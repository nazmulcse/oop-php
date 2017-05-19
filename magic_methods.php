<?php
class A{

    public $x;
    private $y=10;
    function __construct($a)
    {
        $this->x=$a;
    }
    function display()
    {
        echo "Display Unit";
    }
    /*
     * __call function is executed when we call a function using an object of a class
     * which is not present in the class.
     * __call function must have two arguments.
     * First arguments received the function by which we call
     * Second arguments receive the parameters that is passed
     */
    function __call($fun,$args)
    {
        echo "I am Call function".'<br/>';
        echo $fun;
    }
    /*
     * __toString function is executed when we want to try to echo an object of a
     * class as string.
     * this function must return a string otherwise program execution will be failed
     */
    function __toString(){
        return $this->x;
    }
    /*
     * __get is executed when we want to try to echo a properties that is inaccessible
     * or not declared in the class
     * it must be an argument that takes the variable name
     */
    function __get($name){
        //return $name;
        echo "Sorry";
    }
    /*
     * __get is executed when we try to writing data to an inaccessible properties
     * or not declared in the class
     * it must be two arguments that takes the variable name and value
     */
    function __set($name,$value)
    {
        echo $name . $value;
    }
}
$obj=new A("Hello");
$obj->diasplay();
echo "<br/>";
echo $obj;
echo "<br/>";
echo $obj->y;
echo "<br/>";
$obj->y=10;