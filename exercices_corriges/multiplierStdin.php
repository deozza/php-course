<?php

echo "Enter the table to reach and the maximum multiplier. \n";


$handle = fopen('php://stdin', 'r');
$inputs = trim(fgets($handle));
fclose($handle);

$inputsAsArray = explode(' ', $inputs);

if(count($inputsAsArray) !== 2) {
    echo "You should only enter the table to reach and the maximum multiplier. \n";
    return;
}

$maxTable = $inputsAsArray[0];
$maxMultiplier = $inputsAsArray[1];

if(ctype_digit($maxTable) === false || ctype_digit($maxMultiplier) === false) {
    echo "You can only type integers. \n";
    return;
}

echo "Result :\n";

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