<?php

$array = [-4,3,-9,0,4,1];

$positiveCount = 0;
$negativeCount = 0;
$zeroCount = 0;

$numberOfElements = count($array);

foreach ($array as $number) {
    if ($number > 0) {
        $positiveCount++;
    } else if ($number < 0) {
        $negativeCount++;
    } else {
        $zeroCount++;
    }
}

$positiveRatio = number_format($positiveCount/$numberOfElements,6);
$negativeRatio = number_format($negativeCount/$numberOfElements,6);
$zeroRatio = number_format($zeroCount/$numberOfElements,6);

echo $positiveRatio;
echo "\n";
echo $negativeRatio;
echo "\n";
echo $zeroRatio;
echo "\n";
