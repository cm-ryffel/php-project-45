<?php

namespace App\Games\Prograssion;

use function App\Engine\runGame;

const MIN_RANDOM_INT = 1;
const MAX_RANDOM_INT = 10;
const MIN_RANDOM_LENGTH = 5;
const MAX_RANDOM_LENGTH = 10;

function progression(int $start, int $step, int $length) : array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    
    return $progression;
}



function start()
{
    $getGameData = function () : array
{
    $start = rand(MIN_RANDOM_INT, MAX_RANDOM_INT);
    $step = rand(MIN_RANDOM_INT, MAX_RANDOM_INT);
    $length = rand(MIN_RANDOM_LENGTH, MAX_RANDOM_LENGTH);
    $progression = progression($start, $step, $length);
    $index = rand(0, $length - 1);
    $correctAnswer = (string)$progression[$index];
    $progression[$index] = '..';
    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
};

    $condition = 'What number is missing in the progression?';

    runGame($condition, $getGameData);
}
