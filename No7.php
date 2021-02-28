<?php

$s = trim(fgets(STDIN));

$points = [];

for ($i = $i; $i < $s; $i++) {
    $points[] = explode(' ', trim(fgets(STDIN)));
}
sort($points);
// var_dump($points);
$nitens = kumiawase($points, 2);

$mensekies = [];
foreach ($nitens as $niten) {
    list($x1, $y1) = $niten[0];
    list($x2, $y2) = $niten[1];
    if (in_array([$x2 + $y2 - $y1, $y2 + $x1 - $x2], $points) && (in_array([$x1 + $y2 - $y1, $y1 + $x1 - $x2], $points))) {
        $mensekies[] = pow($x1 - $x2, 2) + pow($y1 - $y2, 2);
    }
}

echo max($mensekies);

function kumiawase($zentai, $nukitorisu)
{
    $zentaisu=count($zentai);
    if ($zentaisu < $nukitorisu) {
        return;
    } elseif ($nukitorisu == 1) {
        for ($i = 0; $i < $zentaisu; $i++) {
             $arrs[$i] = array($zentai[$i]);
        }
    } elseif ($nukitorisu > 1) {
        $j = 0;
        for ($i = 0;$i < $zentaisu - $nukitorisu + 1; $i++) {
            $ts = kumiawase(array_slice($zentai, $i + 1), $nukitorisu - 1);
            foreach ($ts as $t) {
                array_unshift($t, $zentai[$i]);
                $arrs[$j]=$t;
                $j++;
            }
        }
    }
    return $arrs;
}
