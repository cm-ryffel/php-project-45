<?php
namespace Src\Even;

use function cli\line;
use function cli\prompt;


function isEven($number){
    return $number % 2 === 0;
};
function game(){
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $correctAnswersCount = 0;
    $roundsToWin = 3;

    while ($correctAnswersCount < $roundsToWin) {
        $number = rand(1, 100);
        line("Question: %d", $number);
        $answer = prompt('Your answer');

        $correctAnswer = isEven($number) ? 'yes' : 'no';

        if ($answer === $correctAnswer) {
            line('Correct!');
            $correctAnswersCount++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line("Congratulations, %s!", $name);
};