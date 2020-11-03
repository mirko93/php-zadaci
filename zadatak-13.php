<?php

/**
 * Napisati PHP funkciju koja proverava da li su svi elementi datog niza brojeva u datom opsegu. Elementi niza su poredjani po velicini, od najmanjeg do najveceg. Ulazni parametri funkcije su niz, donja i gornja granica. Funkcija treba da vrati boolean vrednost.
 */

function checkBoundaries($array, $low, $high)
{
    return $array[0] >= $low && $array[count($array) -1] <= $high;
}

$number = [1, 1, 2, 3 ,4 ,5 , 13, 90];
var_dump(checkBoundaries($number, 1, 100));