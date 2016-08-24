
<form method="get">
    <a>Input text</a><input type="text" name="text"><br>
    <a>Input subtext</a><input type="text" name="text1"><br>
    <input type="submit" value="Send"><br>
</form>


<?php
if ($_GET){
    $output = 0;
    $input = $_GET["text"];
    $str = str_split($input);
    $len = strlen($input);
    $input_sub = $_GET["text1"];
    for ($i = 0; $i <= $len; $i++) {
       if ($str[$i] == $input_sub) {
           $output++;
       }
    }

    echo $output;

}