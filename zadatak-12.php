<?php

/**
 * Napisati PHP funkciju koja za dati niz i dati broj koji predstavljaju ulazne parametre funkcije, vraca vrednost koliko je elemenata niza deljivo sa brojem. Ispisati vrednost koju vraca funkcija.
 */

 function elementsDivideNum($array, $num) 
 {
    $count = 0;

    foreach ($array as $value) {
        if ($value % $num == 0 && $value != 0) {
            $count++;
        }
    }

    return $count;
 }

 $array = [1, 2, 3, 4, 5, 20];

 echo elementsDivideNum($array, 2);