<?php

/**
 * Napisati funkciju koja za niz brojeva, pronalazi nedostajuce vrednosti (npr [1,2,4,5,7], skripta vraca [3,6]
 */

$niz = [2,10,100,24,3];

sort($niz);
var_dump($niz);
echo "<br/>";

$nedostajuceVrijednosti = [];

for ($iterator=$niz[0]; $iterator <= $niz[count($niz) - 1]; $iterator++) {
    if(!in_array($iterator, $niz)) {
        array_push($nedostajuceVrijednosti, $iterator);
    }
}
print_r($nedostajuceVrijednosti);