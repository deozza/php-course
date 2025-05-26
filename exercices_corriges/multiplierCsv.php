<?php

/*
With a CSV file in this format :
5,7
*/

$handle = fopen('./data.csv', 'r');
$row = fgetcsv($handle, 1000, ',', '"', '\\');
fclose($handle);

if(count($row) !== 2) {
    echo "Invalid input file format. \n";
    return;
}

$maxTable = $row[0];
$maxMultiplier = $row[1];

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