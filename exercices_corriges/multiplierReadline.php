<?php



$maxTable = readline("Enter the table to reach.\n");

if(ctype_digit($maxTable) === false ) {
    echo "You can only type integers. \n";
    return;
}

$maxMultiplier = readline("Enter the maximum multiplier.\n");

if(ctype_digit($maxMultiplier) === false) {
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