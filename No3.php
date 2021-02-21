<?php

$wordArr = str_split(trim(fgets(STDIN)));
$num = count($wordArr);
$max = 0;
$count = 0;
$acgt = ['A', 'C', 'G', 'T'];
for ($i = 0; $i < $num; $i++) {
    if (in_array($wordArr[$i], $acgt)) {
        $count++;
        $max = max($count, $max);
    } else {
        $count = 0;
    }
}

echo $max;
