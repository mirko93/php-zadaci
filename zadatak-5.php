<?php

/**
 * Napisati PHP funkciju koja racuna sumu svih vrednosti elemenata proizvoljnog niza koji je ulazni parametar funkcije. Korititi foerach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati sumu elemenata niza koju vraca funkcija.
 */

 function sumAllElement($array)
 {
     $a = 0;

     foreach ($array as $element) {
         $a += $element;
     }

     return $a;
 }

 $array = [11, 4, 7, 18];
 $sum = sumAllElement($array);

 echo $sum;