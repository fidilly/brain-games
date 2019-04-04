<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_QUESTIONS = 3;

function logic($gameDesctiption, $answerAndQuestionData)
{
    line('Welcome to the Brain Games!');
    line($gameDesctiption);
    $name = prompt('May I have your name?');
    line("Hello, $name!\n");

    for ($correctAnswerCounter = 1; $correctAnswerCounter <= NUMBER_OF_QUESTIONS; $correctAnswerCounter++) {
        [$question, $correctAnswer] = $answerAndQuestionData();
        line("Question: $question");
        $answer = prompt('Your answer');

        if ($correctAnswer == $answer) {
            line('Correct!');
        } else {
            line("$answer is wrong answer ;(. Correct answer was $correctAnswer");
            break;
        }

        if ($correctAnswerCounter === NUMBER_OF_QUESTIONS) {
            line("Congratulations, $name!");
            break;
        }
    }
}
