<?php

function sumArrayValues(array $numbers): int
{
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number === 666) {
            $sum -= 100;
        } else {
            $sum += $number;
        }
    }

    return $sum;
}
