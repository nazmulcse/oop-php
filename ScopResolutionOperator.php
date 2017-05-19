<?php
class Sample{
    const PI=3.14;
    static $x=10;
}
class SubSample extends Sample{
    public static $my_static="A Static Value";
    public static function xyz()
    {
        echo self::$my_static;
        echo parent::PI;
    }
}
/*
 * Scope resolution operator works only in static and constant properties
 */
echo Sample::$x;
SubSample::xyz();
echo '<br/>';
define('SI',10);
echo Sample::PI;