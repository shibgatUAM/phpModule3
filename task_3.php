<?php

$grades = array(85, 92, 78, 88, 95);
rsort($grades);

$numlength = count($grades);
for ($i =0; $i < $numlength; $i++) {
    $grades[$i] ."\n";
} 

print_r($grades);
