<?php
class User{
    public $age;
    public $name;
    public $avatar;

    function choixAvatar($choice) {
        $avatars = ["🤣","😁","😒","😘"];
        return $this->avatar = $avatars[$choice];
    }

    function tchater($message){
        echo "<p> - $this->avatar | $this->name : $message </p>";
    }

}

$michel = new User();
$michel->age = 77;
$michel->name = "michou";
$michel->choixAvatar(2);

// echo $michel->avatar;

$michel->tchater("je fait un test");


$brahim = new User();
$brahim->age = 80;
$brahim->name = "brahim";
$brahim->choixAvatar(3);


$brahim->tchater("wsh la cite");


$youssef = new User();
$youssef->age = 80;
$youssef->name = "youssef";
$youssef->choixAvatar(0);


$youssef->tchater("yo les frerot !!");
