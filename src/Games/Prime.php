<?php

namespace App\Games\Prime;

use function App\Engine\runGame;

function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function getGameData()
{
    $number = rand(1, 20);
    $question = (string)$number;
    $correctAnswer = isPrime($number) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}
function start()
{
    $condition = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    runGame($condition, __NAMESPACE__ . '\\getGameData');
}
