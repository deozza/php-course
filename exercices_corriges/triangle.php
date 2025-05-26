<?php

$size = 5;
$lines = "";

for($i = 0; $i < $size; $i++){
    $line = "";
    for($j = 0; $j <= $i; $j++){
        $line .= "* ";
    }

    $line .= "\n";
    $lines .= $line;
}

echo $lines;