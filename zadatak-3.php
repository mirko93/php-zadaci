<?php

/**
 * Napisati PHP funkciju koja prima tru numericka parametra: $a, $b i $c. U slucaju da je parametar $a veci od 0, funkcija vraca zbir $b i $c, u suprotnom vraca razliku $b i $c. Pozvati funkciju sa proizvoljnim vrednostima i ispisati rezultat koji vraca funkcija.
 */

 function plusOrMinus($a, $b, $c)
 {
     if ($a > 0) {
         return $b + $c;
     } else {
         return $b - $c;
     }
 }

 echo plusOrMinus(3, 5, 7);