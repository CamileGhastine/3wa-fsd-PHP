<?php

// Exercice 1 : afficher le plus petit nombre en utilisant les conditions
$a = 10;
$b = 15;

// Ecrire le code ici
if ($a < $b) {
    echo $a;
} else {
    echo $b;
}

echo "<br>";

//ternaire
echo $a < $b ? $a : $b;

echo "<hr>";

// Exercice 2 : afficher la table de 9 (opération + résultat)

for ($i = 1; $i < 10; $i++) {
    echo "$i x 9 = " . $i * 9 . "<br>";
}

echo "<hr>";

// Exercice 3 : compter à rebours

for ($i = 10; $i >= 0; $i--) {
    echo $i . "<br>";
}
echo "<hr>";

// Exercice 4 : Ecrire une boucle qui produit une ligne horizontale de 8 étoiles

// Ecrire le code ici
for ($i = 0; $i < 8; $i++) {
    echo "*";
}

echo "<hr>";

// Exercice 5 : Afficher un figure de 8 étoiles sur 8.

// Ecrire le code ici
for ($j = 0; $j < 8; $j++) {
    for ($i = 0; $i < 8; $i++) {
        echo "*";
    }
    echo '<br>';
}



echo "<hr>";

// Exercice 6 : Ecrire une fonction (utilisant une boucle) qui affiche tout les espaces d'une phrase par un underscore
// indice : si $mot = "jouet" alors $mot[0] = "j", $mot[1] = "o", ... 
// indice : chercher sur google une fonction qui renvoie la longueur d'une chaine de caractères

// Ecrire le code ici

$phrase = "le chat est mort.";

/**
 * Undocumented function
 *
 * @param string $phrase
 * @return string
 */
function slugify(string $phrase): string
{
    for ($i = 0; $i < strlen($phrase); $i++) {
        if ($phrase[$i] === " ") {
            $phrase[$i] = "_";
        }
    }

    return $phrase;
}

echo slugify($phrase);
echo '<br>';
$phrase = "le chien est mort.";

echo str_replace(" ", "_", $phrase);

// trouver sur google son équivalant clef en main.
echo "<hr>";

// Exercice 7 : Ecrire une fonction (utilisant une boucle) qui inverse et affiche l'ordre des lettres d'un mot

// Ecrire le code ici
$word = "camile"; //Resultat: elimac

function reverse_string(string $word): void
{
    $reverseWord = "";

    for ($i = strlen($word) - 1; $i >= 0; $i--) {
        $reverseWord .= $word[$i];
    }

    echo $reverseWord;
}

reverse_string($word);

// trouver sur google son équivalant clef en main.
echo "<hr>";


// Exercice 8: Ecrire une fonction qui supprime les espaces et met la phrase en camelCase
// Interdit d'utiliser les fonctions suivantes : ucwords() et str_replace().
$sentence = "le chat est mort"; //devient : leChatEstMort

// Ecrire le code ici
function camelCase(string $sentence): string
{
    $sentenceToCC = "";
    $space = false;

    for ($i = 0; $i < strlen($sentence); $i++) {

            if ($sentence[$i] === " ") {
                $space = true;
                continue;
            }


            if ($space) {
                $sentenceToCC .= strtoupper($sentence[$i]);
                $space = false;
                continue;
            }

            $sentenceToCC .= $sentence[$i];
    }

    return $sentenceToCC;
}

echo camelCase($sentence);

// Réécrire la fonction en utilisant les fonctions interdites