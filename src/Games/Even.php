<?php

namespace App\Games\Even;

use function App\Engine\runGame;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function getGameData(): array
{
    $question = rand(1, 100);
    $correctAnswer = isEven($question) ? 'yes' : 'no';
    return [(string) $question, $correctAnswer];
}

function start()
{
    $condition = 'Answer "yes" if the number is even, otherwise answer "no".';
    runGame($condition, __NAMESPACE__ . '\\getGameData');
}
