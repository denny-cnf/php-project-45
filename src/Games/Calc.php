<?php

/**
 * This file contains logic Brain-games Calc
 */

namespace Games\Calc;

use function cli\line;
use function cli\prompt;
use function Games\Engine\hello;
use function Games\Engine\absoluteRandomNum;
use function Games\Engine\checkData;
use function Games\Engine\win;
use function Games\Engine\getRandomSymbol;

use const Games\Engine\ROUNDS;

function getCalc()
{
    $name = hello();
    line("What is the result of the expression?");
    for ($i = 0; $i < ROUNDS; $i++) {
        $num1 = absoluteRandomNum();
        $num2 = absoluteRandomNum();
        $symbols = array('+', '-', '*');
        $symbol = $symbols[array_rand($symbols)];
        if ($num1 < $num2) {
            [$num1, $num2] = [$num2, $num1];
        }
        $result = getRandomSymbol($symbol, $num1, $num2);
        line("Question: $num1 $symbol $num2");
        $answer = prompt('Your answer', $answer = "");
        checkData($name, $answer, $result);
    }
    win($name);
}
