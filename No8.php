<?php

$n = trim(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    list($a[], $b[]) = explode(" ", trim(fgets(STDIN)));
}

sort($a, SORT_NUMERIC);
sort($b, SORT_NUMERIC);

if ($n % 2 == 0) {
    $mIndex = $n / 2;
} else {
    $mIndex = ($n - 1) / 2;
}

$mA = $a[$mIndex];
$mB = $b[$mIndex];

$sum = 0;

for ($i = 0; $i < $n; $i++) {
    $sum += abs($a[$i] - $mA) + abs($b[$i] - $mB) + abs($a[$i] - $b[$i]);
}

echo $sum;
