<?php

namespace BrainGames\BrainEven;

use function \cli\line;
use function \cli\prompt;

function run($numberOfQuestions)
{
    line('Welcome to the Brain Games!');
    line("Answer \"yes\" if number even otherwise answer \"no\".\n");
    $name = prompt('May I have your name?');
    line("Hello, $name!\n");

    for ($correctAnswerCounter = 1; $correctAnswerCounter <= $numberOfQuestions; $correctAnswerCounter++) {
        $question = rand();
        line("Question: $question");
        $answer = prompt('Your answer');
        if (isEven($question)) {
            $expected = 'yes';
        } else {
            $expected = 'no';
        }
        
        if ($answer === $expected) {
            line('Correct!');
        } else {
            line("$answer is wrong answer ;(. Correct answer was $expected");
            break;
        }

        if ($correctAnswerCounter === $numberOfQuestions) {
            line("Congratulations, $name!");
            break;
        }
    }
}
                

function isEven($number)
{
    return $number % 2 === 0;
}
