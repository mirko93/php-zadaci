<?php

/**
 * Napisati PHP funkciju koja mnozi prva drva argumenta i od tog rezultata oduzima vrednost treceg argumenta. Ulazni parametri su brojevi $a, $b i $c. Funkcija vraca rezultat. Pozvati funkciju sa proizvoljnim vrednostima i ispisati rezultat koji vraca funkcija.
 */

 function aTimesBminusC($a, $b, $c)
 {
     return ($a * $b) - $c;
 }

 echo aTimesBminusC(3, 5, 8);