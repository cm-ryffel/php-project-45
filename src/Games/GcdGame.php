<?php

namespace App\Games\GcdGame;

use function App\Engine\runGame;

function gcd(int $a, int $b) : int
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}


function start()
{
    $getGameData = function () : array
{
    $a = rand(1, 50);
    $b = rand(1, 50);
    $question = "$a $b";
    $correctAnswer = (string)gcd($a, $b);

    return [$question, $correctAnswer];
};

    $condition = 'Find the greatest common divisor of given numbers.';

    runGame($condition, $getGameData);
}
