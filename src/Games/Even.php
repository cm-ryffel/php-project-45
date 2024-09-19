<?php

namespace App\Games\Even;

use function App\Engine\runGame;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function start()
{
    $getGameData = function (): array {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [(string) $question, $correctAnswer];
    };

    $condition = 'Answer "yes" if the number is even, otherwise answer "no".';

    runGame($condition, $getGameData);
}
