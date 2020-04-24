<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 23-Apr-20
 * Time: 9:21 PM
 */

class simpleClass{

    public function sayHello(){
        echo "I am parent class <br>";
    }
}

trait test{
    public function testTrait(){
        echo "\n I am form trait class";
    }
}

class child extends simpleClass{
    use test;

}

$obj = new child();
$obj->sayHello();
$obj->testTrait();

