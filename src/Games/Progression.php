<?php

namespace App\Games\Prograssion;

use function App\Engine\runGame;

function progression(int $start, int $step, int $length)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function getGameData()
{
    $start = rand(1, 20);
    $step = rand(1, 5);
    $length = rand(5, 10);
    $progression = progression($start, $step, $length);
    $index = rand(0, $length - 1);
    $correctAnswer = (string)$progression[$index];
    $progression[$index] = '..';
    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}

function start()
{
    $condition = 'What number is missing in the progression?';
    runGame($condition, __NAMESPACE__ . '\\getGameData');
}
