<?php

namespace App\Games\Calculate;

use function App\Engine\runGame;

const OPERATIONS = ['+', '-', '*'];
const MIN_RANDOM_INT = 1;
const MAX_RANDOM_INT = 10;
const GAME_CONDITION = 'What is the result of the expression?';

function start(): void
{
    $getGameData = function (): array {
        $start = rand(MIN_RANDOM_INT, MAX_RANDOM_INT);
        $end = rand(MIN_RANDOM_INT, MAX_RANDOM_INT);
        $operation = OPERATIONS[array_rand(OPERATIONS)];
        $question = "$start $operation $end";
        $correctAnswer = (string) calculate($start, $end, $operation);

        return [$question, $correctAnswer];
    };

    runGame(GAME_CONDITION, $getGameData);
}

function calculate(int $firstValue, int $secondValue, string $operation): int
{
    switch ($operation) {
        case '+':
            return $firstValue + $secondValue;
        case '-':
            return $firstValue - $secondValue;
        case '*':
            return $firstValue * $secondValue;
        default:
            throw new \Exception("Unknown operation: $operation");
    }
}