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
        $setRandomSymbol = $symbols[array_rand($symbols)];
        if ($num1 < $num2) {
            [$num1, $num2] = [$num2, $num1];
        }
        $result = getRandomSymbol($setRandomSymbol, $num1, $num2);
        line("Question: $num1 $setRandomSymbol $num2");
        $getUserAnswer = prompt('Your answer', $getUserAnswer = "");
        checkData($name, $getUserAnswer, $result);
    }
    win($name);
}
