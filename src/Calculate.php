<?php

namespace BrainGames\Games\Calculate;

use function BrainGames\Engine\runGame;

const OPERATIONS = ['+', '-', '*'];

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

function gameData(): array
{
    $a = rand(1, 10);
    $b = rand(1, 10);
    $operation = OPERATIONS[array_rand(OPERATIONS)];
    $question = "$a $operation $b";
    $correctAnswer = (string) calculate($a, $b, $operation);
    return [$question, $correctAnswer];
}

function start()
{
    $condition = 'What is the result of the expression?';
    runGame($condition, __NAMESPACE__ . '\\gameData');
}