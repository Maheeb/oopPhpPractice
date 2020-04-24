<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 23-Apr-20
 * Time: 9:21 PM
 */

class simpleClass{
    private $data = array();

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        echo "Seeting '$name' property to '$value' \n";
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        echo "getting property \n";
        if (array_key_exists($name,$this->data)){
            return $this->data[$name];
        }
    }
}

$obj = new simpleClass();
$obj-> a = "Maheeb";
echo $obj->a. "\n";



