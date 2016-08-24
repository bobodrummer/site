<?php

if (isset($_COOKIE["count"]) and ($_COOKIE["visit"]))
{
    $num_count = $_COOKIE["count"];
    $num_count++;
    setcookie("count", $num_count);
    setcookie("visit", date('d/m/Y H:i:s'));
}
else
{
    $num=1;
    setcookie("count", $num);
    setcookie("visit", date('d/m/Y H:i:s'));

}

if ($_COOKIE["count"]>0){
    print '<h1>Welcome back. You was here '.$_COOKIE["count"].' times, last at '.$_COOKIE["visit"].'</h1>';
}
else {
    print '<h1>Welcome.</h1>';
}

class example{
    public $number=1;
    public static function hello(){
        $num = 2;
        echo $num;
    }
}

example::hello();

$lol = new example();
$lol::hello();
echo $lol->number;