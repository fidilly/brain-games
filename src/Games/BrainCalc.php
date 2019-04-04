<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\logic;

const GAME_DESCRITPION = 'What is the result of the expression?';

function data()
{
    $generator = function () {
        $questionOperandOne = rand(0, 20);
        $questionOperandTwo = rand(0, 20);
        $operators = ['+', '-', '*'];
        $questionOperator = $operators[rand(0, count($operators) - 1)];
        switch ($questionOperator) {
            case '+':
                $result = $questionOperandOne + $questionOperandTwo;
                break;
            case '-':
                $result = $questionOperandOne - $questionOperandTwo;
                break;
            case '*':
                $result = $questionOperandOne * $questionOperandTwo;
                break;
        }
        return ["$questionOperandOne $questionOperator $questionOperandTwo", $result];
    };

    logic(GAME_DESCRITPION, $generator);
}
