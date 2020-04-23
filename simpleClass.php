<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 23-Apr-20
 * Time: 9:21 PM
 */

class simpleClass
{

    public  static $var = "A variable";

    public static function display(){

        echo  self::$var;
    }
}

$obj = new simpleClass();
$obj->display();

//simpleClass::display();