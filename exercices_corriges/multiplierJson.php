<?php

/*
With a json file in this format :

    {
        "maxTable": 5,
        "maxMultiplier": 7
    }
*/

$fileContent = file_get_contents('./data.json');
$contentAsArray = json_decode($fileContent, true);

if(array_keys($contentAsArray) !== ['maxTable', 'maxMultiplier']) {
    echo "Invalid input file format. \n";
    return;
}

$maxTable = $contentAsArray['maxTable'];
$maxMultiplier = $contentAsArray['maxMultiplier'];

if(is_int($maxTable) === false || is_int($maxMultiplier) === false) {
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