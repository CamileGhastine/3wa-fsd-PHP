<?php

// Ecrire une fonction getMaxNumber qui renvoie la valeur maximale d'un tableau de nombres.
// Ecrire une autre fonction permettant de tester cette fonction.
// Lancer le script dans le terminale pour tester votre fonction.

function getMaxNumber(array $array): ?float
{
    $max = - INF;

    foreach($array as $number) {
        if(!is_numeric($number)) continue;
        if ($number > $max) $max = $number;
    }

    return $max == - INF ? null : $max;
}

function testGetMaxNumber()
{
    $array = [1, 2, 3, 4, 5];
    assert(getMaxNumber($array) == 5);

    $array = [10, 12, 3, 40, 5];
    assert(getMaxNumber($array) == 40);

    $array = [1.2, 20.1, 0.3, 4];
    assert(getMaxNumber($array) == 20.1);

    $array = [1, 'hello', 3, 40, 5];
    assert(getMaxNumber($array) == 40);

    $array = [-1, 'hello', -3, -40, -5];
    assert(getMaxNumber($array) == -1);

    $array = ['fdgdfsg', 'hello'];
    assert(getMaxNumber($array) == null);
}

testGetMaxNumber();
