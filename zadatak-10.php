<?php

/**
 * Napisati PHP funkciju koja vraca prvih 10 parnih brojeva vecih od broja $n, zajedno sa $n, ako je $n parni broj, koji je ulazni parametar funkcije.
 */

function firstTen($n)
{
    $array = [];

    $i = $n;
    if ($i % 2 != 0) {
        $i++;
    }

    while (count($array) < 10) {
        $array[] = $i;
        $i += 2;
    }

    return $array;
}

$array = firstTen(1);
var_dump($array);