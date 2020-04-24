<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 23-Apr-20
 * Time: 9:21 PM
 */


$test = (new class{

    public function log(){

        return "I am an anonymous class";
    }
});

echo  $test->log();
