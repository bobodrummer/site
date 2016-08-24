<?php
session_start();
echo "hello, ".$_SESSION["username"];
if(@$_POST['exit'])
{
    setcookie("E-mail", $_POST["mail"], time() + 3600); //destroy coockies
    setcookie("Login", $_POST["login"], time() + 3600);
    setcookie("Password", $_POST["password"], time() + 3600);
    unset($_SESSION['username']); // разрегистрировали переменную
    session_destroy(); // разрушаем сессию
    header('Location: http://local.dev/test_tasks/log/login.php');
    exit();
}
if (isset($_COOKIE["E-mail"]) and isset($_COOKIE["Login"]) and isset($_COOKIE["Password"])) {

?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type='submit' name='exit' value='Logout'/>
    </form>
    <h1>Hello, <?php echo $_COOKIE["Login"];?></h1>
    Private content...
    <a href="index.php">Let's go</a>
<?php
}
else {
    header('Location: http://local.dev/test_tasks/log/login.php');
    exit();
}
?>