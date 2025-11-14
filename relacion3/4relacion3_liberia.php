<?php
function esPrimo($num): bool
{
    if ($num < 2 || $num != intval($num)) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0)
            return false;
    }
    return true;
}
function factorial_recurs(int $num)
{
    if ($num == 0 || $num == 1) {
        return 1;
    }
    return $num * factorial($num - 1);
}
function factorial(int $num)
{
    $total = 1;
    for ($i = 1; $i <= $num; $i++) {
        $total *= $i;
    }
    return $total;
}
function MCD(int $num1, int $num2)
{
    while ($num1 != $num2) {
        if ($num1 > $num2) {
            $num1 -= $num2;
        } else {
            $num2 -= $num1;
        }
    }
    return $num1;
}

function swap(&$n1, &$n2)
{
    $temp = $n1;
    $n1 = $n2;
    $n2 = $temp;
}

function invertirArray(&$arr)
{
    $i = 0;
    $j = count($arr) - 1;

    while ($i < $j) {
        swap($arr[$i], $arr[$j]);
        $i++;
        $j--;
    }
}
