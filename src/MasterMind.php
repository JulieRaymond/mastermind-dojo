<?php

namespace App;

class MasterMind
{
    public function getScore(array $masterColors, array $playerColors): array|string
    {
        $a = 0; //mal placé
        $b = 0; //bien placé

        //Vérifions les couleurs bien placées
        foreach ($playerColors as $index => $color) {
            if (
                in_array($color, $masterColors)
                && $color === $masterColors[$index]
            ) {
                $b += 1;
            }
        }
        //Vérifions les couleurs mal placées
        foreach ($playerColors as $index => $color) {
            if (
                in_array($color, $masterColors)
                && $color !== $masterColors[$index]
            ) {
                $a += 1;
            }
        }
        if ($b === 4) {
            return 'win';
        }

        return [$a, $b];
    }
}

//Test de la fonction

$masterMind = new MasterMind();
$masterColors = ['blue', 'green', 'white', 'black'];
$playerColors = ['blue', 'green', 'white', 'black'];
$result = $masterMind->getScore($masterColors, $playerColors);
var_dump($result);
