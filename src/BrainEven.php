<?php

namespace BrainGames\BrainEven;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    line("Answer \"yes\" if number even otherwise answer \"no\".\n");
    $name = prompt('May I have your name?');
    line("Hello, $name!\n");

    $correctAnswerCounter = 0;
    $numberOfquestions = 3;
    while (true) {
        $randomNumber = rand();
        line("Question: $randomNumber");
        $answer = prompt('Your answer');
        if (isEven($randomNumber)) {
            $expected = 'yes';
        } else {
            $expected = 'no';
        }
        
        if ($answer === $expected) {
            $correctAnswerCounter++;
            line('Correct!');
        } else {
            line("$answer is wrong answer ;(. Correct answer was $expected");
            break;
        }

        if ($correctAnswerCounter === $numberOfquestions) {
            line("Congratulations, $name!");
            break;
        }
    }
}
                

function isEven($number)
{
    if ($number % 2 === 0) {
        return true;
    } else {
        return false;
    }
}
