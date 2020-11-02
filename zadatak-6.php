<?php

/**
 * Napisati PHP funkciju koja racuna proizvod svih vrednosti elemenata proizvoljnog niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati proizvod elemenata niza koji vraca funkcija.
 */

 function multiplyAllElement($array)
 {
     $sum = 1;

     foreach ($array as $element) {
         $sum *= $element;
     }
     
     return $sum;
 }

 $array = [3, 6, 7 ,9];
 $sum = multiplyAllElement($array);

 echo $sum;