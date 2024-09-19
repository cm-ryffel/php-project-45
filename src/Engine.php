<?php

namespace App\Engine;

use function cli\line;

use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame(string $condition, callable $gameData)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($condition);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $correctAnswer] = $gameData();
        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line("Congratulations, %s!", $name);
}
