<?php

/**
 * Napisati funkciju koja racuna srednju vrednost elemenata proizvoljnog niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati vrednost oju vraca funkcija
 */

 function middleValue($arr)
 {
     $sum = 0;

     foreach ($arr as $array) {
         $sum += $array;
     }

     return $sum / count($arr);
 }

 $array = [2, 5, 7, 9];
 $sum = middleValue($array);

 echo $sum;