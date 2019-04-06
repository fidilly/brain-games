<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_QUESTIONS = 3;

function playGame($getGameDesctiption, $getAnswerAndQuestionData)
{
    line('Welcome to the Brain Games!');
    line($getGameDesctiption);
    $name = prompt('May I have your name?');
    line("Hello, $name!\n");

    for ($i = 1; $i <= NUMBER_OF_QUESTIONS; $i++) {
        [$question, $correctAnswer] = $getAnswerAndQuestionData();
        line("Question: $question");
        $answer = prompt('Your answer');

        if ($correctAnswer == $answer) {
            line('Correct!');
        } else {
            line("$answer is wrong answer ;(. Correct answer was $correctAnswer");
            return;
        }
    }
    line("Congratulations, $name!");
}
