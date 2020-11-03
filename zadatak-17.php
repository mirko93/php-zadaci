<?php

/**
 * Napisati funkciju koja vraca najduzu rec iz zadatog stringa.
 */

$text = "a dasdasasd";

$words = explode(' ', $text);
$max = '';

foreach ($words as $value) {
    if (strlen($value) > strlen($max)) {
        $max = $value;
    }
}

echo $max;