<?php

/**
 * Napisati funkciju koja iz korisnikovog emaila, izvlaci njegov username (zatim prepraviti da vraca domen).
 */

$email = 'test@email.com';

// username
echo strstr($email, '@', true);

echo '<br>';

//domen
echo substr(strstr($email, '@'), 1);
