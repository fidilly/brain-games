<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\playGame;

const GAME_DESCRITPION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function getGameData()
{
    $generateData = function () {
        $operandOne = rand(0, 20);
        $operandTwo = rand(0, 20);
        $operator = OPERATORS[array_rand(OPERATORS)];
        switch ($operator) {
            case '+':
                $correctAnswer = $operandOne + $operandTwo;
                break;
            case '-':
                $correctAnswer = $operandOne - $operandTwo;
                break;
            case '*':
                $correctAnswer = $operandOne * $operandTwo;
                break;
        }
        $question = "$operandOne $operator $operandTwo";
        return [$question, $correctAnswer];
    };

    playGame(GAME_DESCRITPION, $generateData);
}
