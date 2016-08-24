
<form method="get">
    <a>input </a><input type="time" name="text"><br>
    <input type="submit" value="Send"><br>
</form>


<?php
if ($_GET) {
    $input = $_GET["text"];
    $str = str_split($input);
    $len = strlen($input);

    if (($str[4]==4 || $str[4]==5 || $str[4]==9 || $str[4]==0)){
        echo "red";
    }
    else echo "green";
}

