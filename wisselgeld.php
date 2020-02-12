<?php
$change = (int) $argv[1];
$coins = array(10, 5, 2, 1);
foreach ($coins as $coin) {
    if (floor($change / $coin) > 0) {
        $times = floor($change / $coin);
        echo "$times X $coin" . PHP_EOL;
        $change = $change - ($times * $coin);
    }
}
