<?php

while (true) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $s = explode(" ", $s);
    $n = $s[0];
    $x = $s[1];
    if ($n == 0 && $x == 0) {
        break;
    }
    $ans = 0;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            for ($k = 1; $k <= $n; $k++) {
                if ($i < $j && $j < $k && $i + $j +$k == $x) {
                    $ans++;
                }
            }
        }
    }
    echo $ans . "\n";
}