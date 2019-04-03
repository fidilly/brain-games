<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\logic;
function data()
{
    $generator = function () {
        $questionOperandOne = rand(0, 20);
        $questionOperandTwo = rand(0, 20);

        switch (rand(1, 3)) {
            case 1:
                $questionOperator = '+';
                $result = $questionOperandOne + $questionOperandTwo;
                break;
            case 2:
                $questionOperator = '-';
                $result = $questionOperandOne - $questionOperandTwo;
                break;
            case 3:
                $questionOperator = '*';
                $result = $questionOperandOne * $questionOperandTwo;
                break;
        }
        return ["$questionOperandOne $questionOperator $questionOperandTwo", $result];
    };

    logic(3, 'What is the result of the expression?', $generator);
}
