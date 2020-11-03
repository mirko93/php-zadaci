<?php

/**
 * Napisati funkciju koja zadatu recenicu transformise:
 * Svako slovo u zadatoj recenici postaje veliko slovo
 * Svako slovo u zadatoj recenici postaje malo slovo
 * Prva slova svake reci postaju veliko slovo
 */

$text = "Text lorem ipsuMMMM, hahaAHAHHH!";

echo strtoupper($text);
echo '<br>';
echo strtolower($text);
echo '<br>';
echo ucwords($text);
echo '<br>';