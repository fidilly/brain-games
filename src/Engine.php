<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

function logic($numberOfQuestions, $message, $rules)
{
    line('Welcome to the Brain Games!');
    line($message);
    $name = prompt('May I have your name?');
    line("Hello, $name!\n");

    for ($correctAnswerCounter = 1; $correctAnswerCounter <= $numberOfQuestions; $correctAnswerCounter++) {
        [$question, $expected] = $rules();
        line("Question: $question");
        $answer = prompt('Your answer');

        if ($expected == $answer) {
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
