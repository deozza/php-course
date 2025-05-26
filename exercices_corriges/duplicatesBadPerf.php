<?php

$numbers = [];

for($i = 0; $i < 20; $i++) {
    $numbers[] = rand(1,10);
}

for($i = 0; $i < count($numbers); $i++) {
    $numberToCheck = $numbers[$i];
    $numbersFoundCounter = 0;

    for($j = 0; $j < count($numbers); $j++) {
        $currentNumber = $numbers[$j];
        if($currentNumber === $numberToCheck) {
            $numbersFoundCounter++;
        }

        if($numbersFoundCounter >= 2) {
            unset($numbers[$j]);
        }
    }
}

var_dump($numbers);
