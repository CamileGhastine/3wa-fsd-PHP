<?php
// Ecrire une fonction qui transforme des secondes (4000s) en un temps lisible en heure (01:06:40)
// optionnel travailler en TDD en écrivant la fonction test.

function secondToTime(int $second): ?string
{
    if($second >= 86400) return 'Plus d\'un jour';
    
    if($second<0) return null;

    $restMinutes = $second % 3600;              // $seconde = 8000  => $seconde % 3600 = 800
    $hours = ($second - $second % 3600) / 3600;      // $hour = (8000-800) / 3600 = 7200/3600 = 2 heures 

    $restSecondes = $restMinutes % 60;             // $restMinute = 800 % 60 = 20 (60 * 13 + 20)
    $minutes = ($restMinutes - $restSecondes) /60;   // $minutes = (800 - 20) /60 = 13 minutes
   
    return sprintf('%02d:%02d:%02d', $hours, $minutes, $restSecondes);
}


function testSecondTime(): void
{
    assert(secondToTime(0) === '00:00:00');
    assert(secondToTime(50) === '00:00:50');
    assert(secondToTime(100) === '00:01:40');
    assert(secondToTime(3600) === '01:00:00');
    assert(secondToTime(36065) === '10:01:05');
    assert(secondToTime(86400) === 'Plus d\'un jour');
    assert(secondToTime(100000) === 'Plus d\'un jour');
    assert(secondToTime(-50) === null);
}

testSecondTime();
