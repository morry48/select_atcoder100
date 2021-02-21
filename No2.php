<?php

$num = trim(fgets(STDIN));
$answer = 0;
for ($i = 1; $i <= $num; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    $count = 0;
    for ($j = 1; $j <= $num; $j++) {
        if ($i % $j == 0) {
            $count++;
        }
    }
    if ($count == 8) {
        $answer++;
    }
}

echo $answer;

}