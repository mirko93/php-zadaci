<?php

/**
 * Napisati funkciju koja za dati niz $array i dati broj $a koji predstavljaju ulazne parametre funkcije, vraca vrednost koliko puta se broj $a nalazi u datom nizu $array. Ispisati vrednost koju vraca funkcija.
 */

function numberInSequence($array, $a)
{
    $count = 0;

    foreach ($array as $value) {
        if ($value == $a) {
            $count++;
        }
    }

    return $count;
}

$array = [1, 5, 3, 4, 5, 6];

echo numberInSequence($array, 5);