<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 23-Apr-20
 * Time: 9:21 PM
 */

class simpleClass
{
     public static $count =0;

     public static function counter(){
         echo "It is a static counter";
     }
}

$var = simpleClass::$count=5;

echo $var. "<br>";
simpleClass::counter();








