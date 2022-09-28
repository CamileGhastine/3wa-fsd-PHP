<?php
namespace App;

class Calculator
{
    public function result(array $termes, array $operator)
    {
        // return match ($operator) {
        //     ["+"] =>  $this->sum($termes),
        //     ["*"] =>  $this->multiplie($termes),
        //     ["/"] =>  $this->divide($termes),
        //     [":"] =>  $this->divide($termes),
        //     default => throw new \InvalidArgumentException("l'opérateur n'est pas valide")
        // };

        switch ($operator) {
            case ["+"]:
                return $this->sum($termes);
                break;
            case ["*"]:
                return $this->multiplie($termes);
                break;
            case ["/"]:
                return $this->divide($termes);
                break;
            case [":"]:
                return $this->divide($termes);
                break;
            default:
                throw new \InvalidArgumentException("l'opérateur n'est pas valide");
        }
    }

    public function sum(array $termes): float
    {
        $sum = 0;

        if (count($termes) < 2) throw new \InvalidArgumentException("Il faut au moins deux nombres pour faire une somme !");

        foreach ($termes as $terme) $sum += $terme;

        return $sum;
    }

    public function multiplie(array $termes): float
    {
        $prod = 1;

        if (count($termes) < 2) throw new \InvalidArgumentException("Il faut au moins deux nombres pour faire une multilication !");

        foreach ($termes as $terme) $prod *= $terme
;        return $prod;
    }

    public function divide(array $termes): float
    {
        if (count($termes) < 2) throw new \InvalidArgumentException("Il faut au moins deux nombres pour faire une division !");
        $prod = $termes[0];
        unset($termes[0]);
        if (in_array(0, $termes)) throw new \DivisionByZeroError("la division par zéro est impossible !");

        foreach ($termes as $terme) $prod /= $terme;
        return $prod;
    }
}

$calcul = new Calculator;

try {
    echo $calcul->sum([1, 2, -3, 4, 5, 6]) . PHP_EOL;
    echo $calcul->multiplie([2, 3, 4]) . PHP_EOL;
    echo $calcul->divide([12, 4, 3]) . PHP_EOL;
    echo $calcul->result([6, 2], [":"]) . PHP_EOL;
    echo $calcul->result([10, 2], ["#"]) . PHP_EOL;
    echo $calcul->result([6,0], ["/"]) . PHP_EOL;
    echo $calcul->result([2], ["*"]) . PHP_EOL;
} catch (\InvalidArgumentException | \TypeError | \DivisionByZeroError $e) {
    echo 'Exception dans le fichier ' . $e->getFile(). ' à la ligne ' . $e->getLine() . ' avec le message : ' . $e->getMessage();
}
