<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\startGame;

const GAME_DESCRITPION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function getGameData()
{
    $generateData = function () {
        $questionOperandOne = rand(0, 20);
        $questionOperandTwo = rand(0, 20);
        $questionOperator = OPERATORS[array_rand(OPERATORS)]; 
        switch ($questionOperator) {
            case '+':
                $correctAnswer = $questionOperandOne + $questionOperandTwo;
                break;
            case '-':
                $correctAnswer = $questionOperandOne - $questionOperandTwo;
                break;
            case '*':
                $correctAnswer = $questionOperandOne * $questionOperandTwo;
                break;
        }
        $question = "$questionOperandOne $questionOperator $questionOperandTwo";
        return [$question, $correctAnswer];
    };

    startGame(GAME_DESCRITPION, $generateData);
}
