<?php

/**
 * This file contains logic Brain-games Calc
 */

namespace Games\Calc;

use function cli\line;
use function cli\prompt;
use function Games\Engine\absRandom;
use function Games\Engine\checkData;
use function Games\Engine\win;
use function Games\Engine\getrandomSymbol;

use const Games\Engine\ROUNDS;

function calc()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("What is the result of the expression?");
    for ($i = 0; $i < ROUNDS; $i++) {
        $leftNumber = absRandom();
        $rightNumber = absRandom();
        $symbols = array('+', '-', '*');
        $symbol = $symbols[array_rand($symbols)];
        if ($leftNumber < $rightNumber) {
            [$leftNumber, $rightNumber] = [$rightNumber, $leftNumber];
        } 
        $result = getrandomSymbol($symbol, $leftNumber, $rightNumber);
        line("Question: $leftNumber $symbol $rightNumber");
        $answer = prompt('Your answer', $answer = "");
        checkData($name, $result, $answer);
    }
    win($name);
}
