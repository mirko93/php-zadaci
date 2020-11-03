<?php

/**
 * Napisati funkciju koja ispisuje element niza sa najvecom apsolutnom vrednoscu.
 */

$niz = [1, -2, 3, -50];

$max = abs($niz[0]);

for ($i = 1; $i < count($niz); $i++) {
    if (abs($niz[$i]) > $max) {
        $max = abs($niz[$i]);
    }
}

echo $max;
