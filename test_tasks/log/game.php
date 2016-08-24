<?php
session_start();
if (@$_POST["btn_atk"]) {
    $random = rand(1, 3);
    $random_hp = rand(1, 4);
    $dmg = "";

    if ($_POST["atk"] == $random) {
        $_SESSION["hp1"] = $_SESSION["hp1"] - $random_hp;
        $dmg="Player2 hit ".$_SESSION["username"]." on ".$random_hp." dmg.";
    } else {
        $_SESSION["hp2"] = $_SESSION["hp2"] - $random_hp;
        $dmg=$_SESSION["username"]." hit Player2 on ".$random_hp." dmg.";
    }
}
if ($_SESSION["hp1"]<=0){
    header('Location: http://local.dev/test_tasks/log/game_over.php');
}

if ($_SESSION["hp2"]<=0){
    header('Location: http://local.dev/test_tasks/log/game_win.php');
}
?>


<html>
<head>

<title>game</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">

<div id="header">
  <h1>Alco game</h1>
</div>
    <form method="post">
<div id="left">
  <h3><?php echo $_SESSION["username"]?></h3>
  <p>HP: <?php echo $_SESSION["hp1"]?></p>
  <p>Damage: <?php echo $dmg?></p>
    <p><?php echo $_SESSION["username"]." value: ".$_POST["atk"] ?></p>
    <p>Random value: <?php echo $random?></p>
    <input type="text" name="atk">
    <input type="submit" value="Send" name="btn_atk">
</div>
        </form>
<div id="content">
  <h3>Player 2 </h3>
    <p>HP: <?php echo $_SESSION["hp2"]?> </p>
    <p>Damage: <?php echo $dmg?></p>
    <p><?php echo $_SESSION["username"]." value: ".$_POST["atk"] ?></p>
    <p>Random value: <?php echo $random?></p>

</div>
<div id="clear"></div>
<div id="footer">
    <a href="game_start.php">Try again?</a>
</div>

</div>
</body>
</html>
