<?php

/**
 * Napisati funkciju koja vraca najzastupljeniji karakter u zadatom stringu.
 */

$text = "Ovo aje naAeki atextA, sata godAAAAA!!";

$counChars = count_chars($text, 1);
print_r($counChars);

$maxNumberOfOccurances = max($counChars);

echo "<br/>";
echo $maxNumberOfOccurances;
echo "<br/>";

$key = array_search($maxNumberOfOccurances, $counChars);

echo($key);
echo "<br/>";

$letterWithMaxOccurances = chr($key);
echo $letterWithMaxOccurances;