<?php


if($argc !== 3) {
    echo "You should enter the table to reach and the maximum multiplier. \n";
    return;
}

$maxTable = $argv[1];
$maxMultiplier = $argv[2];

if(ctype_digit($maxTable) === false || ctype_digit($maxMultiplier) === false) {
    echo "You can only type integers. \n";
    return;
}

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