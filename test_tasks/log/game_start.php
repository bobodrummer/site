<?php
session_start();
$_SESSION["hp1"]=10;
$_SESSION["hp2"]=10;
$_SESSION["username"]=$_POST["user"];

if (@$_POST["go"])
{
    header('Location: http://local.dev/test_tasks/log/game.php');
}

if (@$_POST["apply"])
{
    $_SESSION["hp1"]=$_POST["base_hp"];
    $_SESSION["hp2"]=$_POST["base_hp"];
    header('Location: http://local.dev/test_tasks/log/game.php');
}


?>

<form method="post">
    Enter your name: <input type="text" name="user">
    <input type="submit" value="Let's go!" name="go"><br><br>
    Base HP=10, you can change it: <input type="text" size="3" name="base_hp">
    <input type="submit" value="Apply and GO!" name="apply">

</form>
