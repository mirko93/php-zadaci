<?php

/**
 * Napisati PHP funkciju koja vraca najmanji element niza. Niz je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati najmanji element niza koji vraca funkcija.
 */

 function minimum($array)
 {
     $min = $array[0];

     foreach ($array as $element) {
         if ($element < $min) {
             $min = $element;
         }
     }

     return $min;
 }

 $array = [5, 3, 10, 15];
 $min = minimum($array);

 echo $min;