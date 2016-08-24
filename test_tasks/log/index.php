<?php
session_start();
echo "hello, ".$_SESSION["username"];
$_SESSION["username"]=10;
?>

<html>
<body>
<a href="coock.php">back</a>
</body>
</html>
