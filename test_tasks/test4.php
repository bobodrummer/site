
<form method="get">
    <a>Введите ФИО</a><input type="text" name="text"><br>
    <input type="submit" value="Send"><br>
</form>


<?php
if ($_GET) {
    $input = $_GET["text"];
    $str = str_split($input);
    $len = strlen($input);
    $start = 0;
    for ($i = 0; $i <= $len; $i++) {
        echo $str[$i];
        if ($str[$i] == " ") {
            echo $str[$i + 1] . ". ";
            $start = $i+1;
           goto end;
        }
    }
end:
    for ($y = $start; $y <= $len; $y++) {
        if ($str[$y] == " ") {
            echo $str[$y + 1] . ". ";
        }
    }
}
    echo $output;

