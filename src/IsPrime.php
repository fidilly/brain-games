<?php

namespace BrainGames\IsPrime;

function isPrime($number)
{
    if ($number <= 2) {
        return true;
    }
    for ($i = $number / 2; $i > 2; $i--) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
