<?php

$string = $argv[1] . "";
$int = (int)$string;

$rest = $int;

if ($int >= 10) {
    $hoeveel10 = floor($int/10);
    
    $rest = $rest - ($hoeveel10 * 10);
    
    echo $hoeveel10 . " x 10 euro" . PHP_EOL;
    
}

if ($rest >= 5) {
    $hoeveel5 = floor($rest/5);
    
    $rest = $rest - ($hoeveel5 * 5);
    echo $hoeveel5 . " x 5 euro" . PHP_EOL;
}


if ($rest >= 2) {
    $hoeveel2 = floor($rest/2);
    
    $rest = $rest - ($hoeveel2 * 2);
    echo $hoeveel2 . " x 2 euro" . PHP_EOL;
}

if ($rest > 0) { 
    $hoeveel1 = floor($rest/1);
    
    $rest = $rest - ($hoeveel1 * 1);
    echo $hoeveel1 . " x 1 euro" . PHP_EOL;
}
?>