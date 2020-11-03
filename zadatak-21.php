<?php

/**
 * Napisati funkciju koja prima tri parametra. Prvi parametar je tipa niz, drugi parametar je tipa string i treci parametar je tipa integer ili double. Provjeriti da li su paremtri tipa za koji se predpostavlja, ako nisu baciti exception. Funkcija ispituje da li se drugi parametar nalazi unutar niza, ako se nalazi ispisuje na ekranu '$param2 se nalazi u nizu', ukoliko se parametar dva ne nalazi u nizu baciti excpetion. Isti proces ponoviti i za treci parametar. Obraditi exception-e prilikom poziva funkcije sa try-catch blokom.
 * 
 * gettype($var)
 * in_array($param2, $array)
 */

function funkcijaKojaPrimaTriParametra($array, $param2, $param3) {
    if (gettype($array) !== "array") {
        throw new Exception('$array nije niz');
    }
    if (gettype($param2) !== "string") {
        throw new Exception('$param2 nije string');
    }
    if (gettype($param3) !== "integer" && gettype($param3) !== "double") {
        throw new Exception('$param3 nije integer/double');
    }
    if (in_array($param2, $array)) {
        echo "$param2 se nalazi unutar niza 'array'";
        echo "<br/>";
    } else {
        throw new Exception("$param2 se NE nalazi unutar 'array'");
    }
    if (in_array($param3, $array)) {
        echo "$param3 se nalazi unutar niza 'array'";
        echo "<br/>";
    } else {
        throw new Exception("$param3 se NE nalazi unutar 'array'");
    }
    return true;
}

try {
    funkcijaKojaPrimaTriParametra([1,2,3,'marko'], 'marko', 3);
    echo "Sve je proslo kako treba. Ispunjeni su svi uslovi";
    echo "<br/>";
} catch (Exception $e) {
    echo "Caught exception " . $e->getMessage() . "<br/>";
}

try {
    funkcijaKojaPrimaTriParametra([], 'marko', 3);
    echo "Sve je proslo kako treba. Ispunjeni su svi uslovi";
    echo "<br/>";
} catch (Exception $e) {
    echo "Caught exception " . $e->getMessage() . "<br/>";
}

try {
    funkcijaKojaPrimaTriParametra([1,2,3,'marko'], 2, 3);
    echo "Sve je proslo kako treba. Ispunjeni su svi uslovi";
    echo "<br/>";
} catch (Exception $e) {
    echo "Caught exception " . $e->getMessage() . "<br/>";
}

try {
    funkcijaKojaPrimaTriParametra([[1], [2], ['marko']], 'marko', 2);
    echo "Sve je proslo kako treba. Ispunjeni su svi uslovi";
    echo "<br/>";
} catch (Exception $e) {
    echo "Caught exception " . $e->getMessage() . "<br/>";
}

try {
    funkcijaKojaPrimaTriParametra('marko', [], 2);
    echo "Sve je proslo kako treba. Ispunjeni su svi uslovi";
    echo "<br/>";
} catch (Exception $e) {
    echo "Caught exception " . $e->getMessage() . "<br/>";
}

try {
    funkcijaKojaPrimaTriParametra([1,2,3, 'marko'], 'marko', 10);
    echo "Sve je proslo kako treba. Ispunjeni su svi uslovi";
    echo "<br/>";
} catch (Exception $e) {
    echo "Caught exception " . $e->getMessage() . "<br/>";
}