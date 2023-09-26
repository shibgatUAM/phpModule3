<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($text) {
    $lowercaseText = strtolower($text);
    $modifiedText = str_replace("brown", "red", $lowercaseText);
    echo $modifiedText;
}

modifyText($text);