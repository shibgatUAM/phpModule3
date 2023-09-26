<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$countNumbers = count($numbers);
for ($i = 0; $i < $countNumbers; $i++) {
    if ($numbers[$i] % 2 == 0) {
        unset($numbers[$i]);
    }
}

print_r($numbers);