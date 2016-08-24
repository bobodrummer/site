<?php
for ($i=0; $i<9; $i++){
    $mas[$i]=rand(1,150);
    echo $mas[$i]." ";
}
// min

$min = $mas[0];
for ($i=0; $i<9; $i++){
    if ($min > $mas[$i]){
        $min = $mas[$i];
        $index_min=$i;
    }
}

$max = $mas[0];
for ($i=0; $i<9; $i++){
    if ($max < $mas[$i]){
        $max = $mas[$i];
        $index_max=$i;
    }
}

$mas[$index_min]=$max;
$mas[$index_max]=$min;

echo "min= ".$min;
echo "max= ".$max;
echo "<br>";

for ($i=0; $i<9; $i++){
    echo $mas[$i]." ";
}