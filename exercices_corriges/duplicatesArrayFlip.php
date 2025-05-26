<?php

$numbers = [];

for($i = 0; $i < 20; $i++) {
    $numbers[] = rand(1,10);
}

$flippedNumbers = array_flip($numbers);
$numbersWithoutDuplicate = array_keys($flippedNumbers);


var_dump($numbersWithoutDuplicate);
