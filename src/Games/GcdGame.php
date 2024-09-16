<?php

namespace Src\Games\GcdGame;

use function App\Engine\runGame;

function gcd(int $a, int $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function getGameData()
{
    $a = rand(1, 50);
    $b = rand(1, 50);
    $question = "$a $b";
    $correctAnswer = (string)gcd($a, $b);

    return [$question, $correctAnswer];
}

function start()
{
    $condition = 'Find the greatest common divisor of given numbers.';
    runGame($condition, __NAMESPACE__ . '\\getGameData');
}
