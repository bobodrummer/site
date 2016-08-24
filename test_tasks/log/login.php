<?php
session_start();
$_SESSION["username"]=$_POST["login"];

if (@$_POST["log"])
{
    setcookie("E-mail", $_POST["mail"], time() + 3600);
    setcookie("Login", $_POST["login"], time() + 3600);
    setcookie("Password", $_POST["password"], time() + 3600);
    header('Location: http://local.dev/test_tasks/log/coock.php');
    exit();
}
if (!isset($_COOKIE["E-mail"]) and !isset($_COOKIE["Login"]) and !isset($_COOKIE["Password"])) {
?>

<style type="text/css" xmlns="http://www.w3.org/1999/html">
    .block {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }
    .links {
        color: orange;
        text-shadow: 0.5px 0.5px 0.5px black, 0 0 1em black;
        font-size: small;
    }
</style>
<div class="block" >
    <div>
    <form method="post">
        <b>E-mail:</b><br>
        <input type="text" name="mail"><br>
        <b>Login:</b><br>
        <input type="text" name="login"><br>
        <b>Password:</b><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login" name="log">
    </form>
    </div>
</div>
<?php
}
else {
    header('Location: http://local.dev/test_tasks/log/coock.php');
    exit();
}
?>
