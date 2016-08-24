
<form method="get">
    <a>input </a><input type="text" name="text"><br>
    <input type="submit" value="Send"><br>
</form>


<?php
if ($_GET) {
    $input = $_GET["text"];
    $str = str_split($input);
    $len = strlen($input);

   switch ($input){
       case 2:
           echo 2;
           break;
       case 3:
           echo 3;
           break;
       case 4:
           echo 4;
           break;
       case 5:
           echo 5;
           break;
       case 6:
           echo 6;
           break;
       case 7:
           echo 7;
           break;
       case 8:
           echo 8;
           break;
       case 9:
           echo 9;
           break;
       case 10:
           echo 10;
           break;
       case 11:
           echo "Jack";
           break;
       case 12:
           echo "Queen";
           break;
       case 13:
           echo "King";
           break;
       case 14:
           echo "Ace";
           break;
   }
}

