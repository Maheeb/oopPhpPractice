<?php
/**
 * Created by PhpStorm.
 * User: UnderTaker
 * Date: 23-Apr-20
 * Time: 9:21 PM
 */

class simpleClass
{
        public $username="";
        private $loggedin =false;

        public function login(){

            $this->loggedin= true;
        }
        public function logout(){
            $this->loggedin = true;
        }

        public function isLoggedin(){
            return $this->loggedin;
        }

}

class Administrator extends simpleClass{

    public function createForum($forumName){
        echo $this->username." created a forum: ".$forumName."<br>";
    }
    public function bankMember($member){
        echo "<br>".$this->username." banned the member: ". $member->username;
    }

}


$member = new simpleClass();
$member->username="Maheeb";
$member->login();

$admin = new Administrator();
$admin->username = "Azmaeen";
$admin->login();

$admin->createForum('oopPractice');
$admin->bankMember($member);






