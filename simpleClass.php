<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 23-Apr-20
 * Time: 9:21 PM
 */

abstract class simpleClass
{
    abstract protected function getName($name);
}

class  childClass extends simpleClass{

    public function getName($name)
    {
        // TODO: Implement getName() method.
        return "hi " . $name;
    }

}

$obj = new childClass();
$var= $obj->getName('Maheeb');
echo $var;





