<?php
if ($_POST["login"]=="bobodrummer"){
    echo "Login is busy now";
}
else {
    echo "hello " . $_POST["login"] . ", your e-mail: " . $_POST["mail"];
}