<?php

namespace App\Games\GcdGame;

use function App\Engine\runGame;

const MIN_RANDOM_NUMBER = 1;
const MAX_RANDOM_NUMBER = 50;
const GAME_CONDITION = 'Find the greatest common divisor of given numbers.';

function start(): void
{
    $getGameData = function (): array {
        $firstValue = rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
        $secondValue = rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
        $question = "$firstValue $secondValue";
        $correctAnswer = (string)gcd($firstValue, $secondValue);

        return [$question, $correctAnswer];
    };


    runGame(GAME_CONDITION, $getGameData);
}

function gcd(int $firstValue, int $secondValue): int
{
    while ($secondValue != 0) {
        $temp = $secondValue;
        $secondValue = $firstValue % $secondValue;
        $firstValue = $temp;
    }
    return $firstValue;
}
