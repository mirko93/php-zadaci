<?php

/**
 * Napisati funkciju koja provera da li su svi elementi datog niza u datom opsegu. Ulazni parametri funkcije su niz, donja granica i gornja granica
 */

function isArrayInScope($array, $upper, $lower)
{
    foreach ($array as $ar) {
        if ($upper > $ar || $lower < $ar) {
            return false;
        }
    }

    return true;
}

$array = [3, 4, 5, 6, 7];
$scope = isArrayInScope($array, 1, 10);

var_dump($scope);