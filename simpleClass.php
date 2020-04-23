<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 23-Apr-20
 * Time: 9:21 PM
 */

class simpleClass
{

    private $name;

    /**
     * @return string
     */

    public function __construct($val)
    {
        return $this->name = $val;
    }

    /**
     * @return string
     */

    public function sayHello(){
        echo "hello world";
    }

    /**
     * @return string
     */

    public function __destruct()
    {
        // TODO: Implement __destruct() method.

        echo "bye bye ".$this->name;
    }


}

$obj = new simpleClass('Maheeb');

$obj->sayHello();

