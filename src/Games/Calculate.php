<?php

namespace App\Games\Calculate;

use function App\Engine\runGame;

const OPERATIONS = ['+', '-', '*'];
const MIN_RANDOM_INT = 1;
const MAX_RANDOM_INT =10;

function calculate(int $a, int $b, string $operation): int
{
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        default:
            throw new \Exception("Unknown operation: $operation");
    }
}


function start()
{
    $getGameData = function (): array
{
    $start = rand(MIN_RANDOM_INT, MAX_RANDOM_INT);
    $end = rand(MIN_RANDOM_INT, MAX_RANDOM_INT);
    $operation = OPERATIONS[array_rand(OPERATIONS)];
    $question = "$start $operation $end";
    $correctAnswer = (string) calculate($start, $end, $operation);

    return [$question, $correctAnswer];
};

    $condition = 'What is the result of the expression?';

    runGame($condition, $getGameData);
}