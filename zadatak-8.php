<?php

/**
 * Napisati funkciju koja vraca niz neparnih celih brojeva u intervalu od $a do $b koji su ulazni parametri funkcije.
 */

 function oddNumbers($a, $b)
 {
    $array = [];

    foreach (range($a, $b) as $num) {
        if ($num % 2 == 1) {
            $array[] = $num;
        }
    }

    return $array;
 }

 $array = oddNumbers(2, 9);
 var_dump($array);