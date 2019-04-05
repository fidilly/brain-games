<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_QUESTIONS = 3;

function startGame($gameDesctiption, $answerAndQuestionData)
{
    line('Welcome to the Brain Games!');
    line($gameDesctiption);
    $name = prompt('May I have your name?');
    line("Hello, $name!\n");

    for ($i = 1; $i <= NUMBER_OF_QUESTIONS; $i++) {
        [$question, $correctAnswer] = $answerAndQuestionData();
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
