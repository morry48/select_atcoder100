<?php
$input_line = trim(fgets(STDIN));
$input_line = str_replace(array("\r\n","\r","\n"), '', $input_line);
$input_line = explode(" ", $input_line);
$arr = [];
for ($i = 0; $i < $input_line[0]; $i++) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $s = explode(" ", $s);
    $arr[] = $s;
}
$sumArr = [];

for ($k = 0; $k < $input_line[1]; $k++) {
    for ($l = 0; $l < $input_line[1]; $l++) {
        if ($k <= $l) {continue;}
        $sum = 0;
        for ($j = 0; $j < $input_line[0]; $j++) {
            $sum = $sum + max($arr[$j][$k], $arr[$j][$l]);
        }
        $sumArr[] = $sum; 
    }
}
echo max($sumArr) . "\n";
}