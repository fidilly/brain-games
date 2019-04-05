<?php

namespace BrainGames\Gcd;

function getGcd($numOne, $numTwo)
{
    $divisor = min($numOne, $numTwo);
    while ($numOne % $divisor !== 0 || $numTwo % $divisor !== 0) {
        $divisor--;
    }
    
    return $divisor;
}
