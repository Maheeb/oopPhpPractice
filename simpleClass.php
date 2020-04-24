<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 23-Apr-20
 * Time: 9:21 PM
 */

class simpleClass{

    public $name ="";
    private $roll ="";

    function __construct($name,$roll)
    {
        $this->name = $name;
        $this->roll = $roll;
    }
}

$obj_1 = new simpleClass("Maheeb",'cse05807028');
$obj_2 = clone $obj_1;
$obj_2->name = "Azmaeen";

echo $obj_1->name ."<br>";
echo $obj_2->name;



