<?php

$numbers = [];

for($i = 0; $i < 20; $i++) {
    $numbers[] = rand(1,10);
}

$cleanedNumbersArray = [];

for($i = 0; $i < count($numbers); $i++) {
    $numberToCheck = $numbers[$i];
    if(in_array($numberToCheck, $cleanedNumbersArray) === false) {
        $cleanedNumbersArray[] = $numberToCheck;
    }
}

var_dump($cleanedNumbersArray);
