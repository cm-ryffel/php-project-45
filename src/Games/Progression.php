<?php
namespace Src\Games\Prograssion;
use function Src\Engine\runGame;

function progression($start, $step, $length){
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function gameData(){
    $start = rand(1, 20);
    $step = rand(1, 5);
    $length = rand(5, 10);
    $progression = progression($start, $step, $length);
    $Index = rand(0, $length - 1);
    $correctAnswer = (string)$progression[$Index];
    $progression[$Index] = '..';
    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}

function start(){
    $condition = 'What number is missing in the progression?';
    runGame($condition, __NAMESPACE__ . '\\gameData');
}