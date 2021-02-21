<?php

$s = trim(fgets(STDIN));
$number = trim(fgets(STDIN));
$numToArr = str_split($number);

$ansList = [];
$firstList = [];
$secondList = [];

for ($i = 0; $i < $s; $i++) {
    //１桁目の組み合わせが既に出てきている場合は飛ばす
    if(in_array($numToArr[$i], $firstList)) {continue;}
    $firstList[] = $numToArr[$i];
    for ($j = $i + 1; $j < $s; $j++) {
        //１桁目、２桁目の組み合わせが既に出てきている場合は飛ばす
        if ($i >= $j) {continue;}
        if(in_array($numToArr[$i] . $numToArr[$j], $secondList)) {continue;}
            $secondList[] = $numToArr[$i] . $numToArr[$j];
       for ($k = $j + 1; $k < $s; $k++) {
           if ($j >= $k) {continue;}
           $ansList[] = $numToArr[$i] . $numToArr[$j] . $numToArr[$k];
        }   
    }
}