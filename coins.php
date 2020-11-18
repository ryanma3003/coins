<?php

function possible($arr, $coin, $value) {
    $v = [];
    for($a = 0; $a < $value+1; ++$a) { 
        $v[] = 0; 
    }

    $table = $v;
    $table[0] = 1;

    for($i = 0; $i < $coin; ++$i) {
        for($j = $arr[$i]; $j < $value+1; ++$j) {
            $table[$j] += $table[$j-$arr[$i]];
        }
    }

    return $table[$value];
}

$arr = [1, 5, 10, 25, 50, 100, 200];
$coin = count($arr);
$value = 350;
$result = possible($arr, $coin, $value);

var_dump($result);