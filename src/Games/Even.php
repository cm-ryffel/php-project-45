<?php

namespace App\Games\Even;

use function App\Engine\runGame;

const GAME_CONDITION = 'Answer "yes" if the number is even, otherwise answer "no".';

function start(): void
{
    $getGameData = function (): array {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [(string) $question, $correctAnswer];
    };


    runGame(GAME_CONDITION, $getGameData);
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

