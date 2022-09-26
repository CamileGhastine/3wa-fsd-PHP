<?php

// Ceci est un commentaire sur une ligne

/*
Ceci est 
un commentaire
sur plusieurs lignes
*/

echo "En ligne de commande pour ouvrir le serveur interne de php : php -S localhost:8000<br/>";
echo "<hr>";

// Affichage
echo '<h4 style="text-decoration: underline;">Affichage :</h4>';

//exercice 1
// Afficher hello word ! sur une ligne et bonjour le monde sur la ligne du dessous.

// CODER ICI ....

// Une variable permet de stocker des valeurs de différents types 
// variable = nom + valeur + type
echo '<h4 style="text-decoration: underline;">Variables :</h4>';

$var1 = 2; // type integer
$var2 = "Hello !"; // type string
$var3 = true; // type boolean

// AFficher ces 3 variables les unes en dessous des autres.
// CODER ICI ....

// Y-a-t-il quelque chose qui vous parait étrange ,
// Réponse : ICI ...



echo '<h4 style="text-decoration: underline;">Var_dump :</h4>';
// var_dump() permet d'afficher le type et la valeur d'une variable
var_dump($var1);
echo "<br>";
var_dump($var2);
echo "<br>";
var_dump($var3);
echo "<hr>";
// Observez les résultats obtenus par les lignes de code ci-dessus.

// die(); 
// décommenter la ligne ci-desssu et palcez la en ligne 2. Que constatez-vous ?
// Réponse : ICI ...

echo '<h4 style="text-decoration: underline;">Opérateur arithmétique :</h4>';
//Opérateur arithmétique
$number1 = 20;
$number2 = 10;
// Decommenter les lignes ci-dessous et coder

// $addition =  COMPLETER ICI ...;
// echo $addition;
echo "<br>";
// $soustraction = COMPLETER ICI ...;
// echo $soustraction;
echo "<br>";
// $multiplication = COMPLETER ICI ...;
// echo $multiplication;
echo "<br>";
// $division = COMPLETER ICI ...;
// echo $division;
echo "<br>";

// Quel sera le résultat affiché ?
$number1 = 20;
$number2 = 10;
$number1 += $number2; // Réponse : ICI ...
$number1 -= $number2; // // Réponse : ICI ...
$number1 *= $number2; // // Réponse : ICI ...
$number1 /= 2; // // Réponse : ICI ...
// décommenter pour vérifier le résultat final
// echo $number1;




echo '<h4 style="text-decoration: underline;">Opérateur de chaines :</h4>';

// Opérateurs de chaine (concaténation)
$nom = "Ghastine";
$prenom = "Camile";


// Afficher : Je suis Camile Ghastine (2 méthodes)
// CODER ICI ...

echo $nom . "<br>";
$nom .= $prenom;
echo $nom . "<hr>";

echo '<h4 style="text-decoration: underline;">Codition :</h4>';
// Condition
$condition = false;

if ($condition) {
    echo "C'est vrai !" . "<br>";
}

if ($condition) {
    echo "C'est vrai !" . "<br>";
} else {
    echo "C'est faux !<br>";
}

$number = 2;

if ($number < 0) {
    echo "Je suis plus petit que 0";
} elseif ($number > 0) {
    echo "Je suis plus grand que 0";
} else {
    echo " je suis égal à 0";
}
echo "<hr>";

echo '<h4 style="text-decoration: underline;">Boucles while :</h4>';
// boucle while (définir la variable d'incrémentation hors de la boucle et l'incrémenter dans la boucle)
$i = 0;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}
echo "<hr>";

// Exercice : afficher la table de 9 (opération + résultat)
// 1 x 9 = 9
// 2 x 9 = 18
// ...

// CODER ICI ...

echo "<hr>";

echo '<h4 style="text-decoration: underline;">Boucles for :</h4>';
// boucle for
echo "Compter<br>";
for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
}

// Exercice : compter à rebours
echo "Compter à rebours<br>";

// CODER ICI ...


/*
Structure d'un URL (Uniform Ressource Locator)

https://www.monSite.com/blog/article1?parametre=valeur&autreParametre=valeur#ancre

https : protocole (http, ftp, mailto, ...)

www.monSite.com : nom de domaine = sous-domaine (www).domaine-principal (monSite).domaine-de-deuxième-niveau (com)

/blog/article1 : chemin vers la ressource

après ? : paramètres = données que l'on fait transiter dans l'URL

après # : ancre dans la page

On peut récupérer les valeurs des paramètrespassé après ? dans la varaibles $_GET['parametre']

exemple :
Si on à l'url : www.monsite.com?param1=true&param2=Paris&param3=50
On pourra récupérer ces parmètres dans les variables :
$_GET['param1'] = "true";
$_GET['param2'] = "Paris";
$_GET['param3'] = "50";
*/
?>

<a href="?prenom=camile">mon lien</a>
<br>
<!-- Ecrire un bout de code qui affiche le prénom passé dans l'url dans le navigateur. -->

<!-- CODER ICI ... -->