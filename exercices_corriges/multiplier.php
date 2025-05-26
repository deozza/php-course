<?php

$maxTable = 5;
$maxMultiplier =10;

$content = "";

for($line = 1; $line <= $maxTable; $line++) {
    $lineContent = "";
    for($multiplier = 1; $multiplier <= $maxMultiplier; $multiplier++){
        $lineContent .= $line * $multiplier . " ";
    }

    $lineContent .= "\n";
    $content .= $lineContent;
}

echo $content;