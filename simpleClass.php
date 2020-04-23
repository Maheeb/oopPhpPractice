<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 23-Apr-20
 * Time: 9:21 PM
 */

class simpleClass
{

    private $name="";
    private $age="";

    /**
     * @return string
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function setAge($age)
    {
        $this->age= $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        echo "hello my name is ".$this->name." my age is ".$this->age;
    }


}

$obj = new simpleClass();
$obj->setName("Maheeb")->setAge("25")->getInfo();

