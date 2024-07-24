<?php

namespace Src\Games\Gcd;

use function Src\Engine\runGame;

function gcd($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function gameData()
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
    runGame($condition, __NAMESPACE__ . '\\gameData');
}
