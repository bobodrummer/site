<?php
    if ($_GET["country"]==1)
       echo json_encode(array("1" => "New York", "2" => "Washington"));

    else if ($_GET["country"]==2)
        echo json_encode(array("1" => "Paris", "2" => "Marcelle"));
    ?>