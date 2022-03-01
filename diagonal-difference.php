<?php

$matrix = array(
    array(11, 2, 4),
    array(4, 5, 6),
    array(10, 8, -12)
);


echo '<pre>';
print_r($matrix);
echo '</pre>';

//TODO: optimizarlo para hacerlo en un solo foreach anidado
$diagonalPrimaria = 0;
foreach ($matrix as $i => $value1) {
    foreach ($value1 as $j => $value2) {
        if ($i == $j) {
            $diagonalPrimaria += $value1[$i];
        }
    }
}
$diagonalSecundaria = 0;
foreach (array_reverse($matrix) as $i => $value1) {
    foreach ($value1 as $j => $value2) {
        if ($i == $j) {
            $diagonalSecundaria += $value1[$i];
        }
    }
}
$diferenciaDiagonales = abs($diagonalPrimaria - $diagonalSecundaria);
echo 'Diagonal Secundaria : ' . $diagonalPrimaria;
echo '<br>';
echo 'Diagonal Secundaria : ' . $diagonalSecundaria;
echo '<br>';
echo 'Diferencia de las diagonales : '.$diferenciaDiagonales;

