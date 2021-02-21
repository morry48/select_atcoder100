<?php

$s = trim(fgets(STDIN));
$s = str_replace(array("\r\n","\r","\n"), '', $s);
$s = explode(" ", $s);

$priceA = $s[0];
$priceB = $s[1];
$priceC = $s[2];
$needA = $s[3];
$needB = $s[4];

$priceList = [];

//AとBの少ない方の数分をABで買って足りないを買い足す場合
$buyA = 0;
$buyB = 0;
$buyC = min($needA, $needB) * 2;
if ($needA <= $needB) {
    $buyB = $needB - $buyC / 2;
} else {
    $buyA = $needA - $buyC / 2;
}
$priceList[] = $buyA * $priceA + $buyB * $priceB + $buyC * $priceC;

//Cを買わない場合
$priceList[] = $priceA * $needA + $priceB * $needB;

//Cのみ買う場合
$priceList[] = $priceC * 2 * max($needA, $needB);

echo min($priceList) . "\n";
}