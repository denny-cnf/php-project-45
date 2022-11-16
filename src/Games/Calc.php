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

use const Games\Engine\ROUNDS;

function getCalc()
{
    function getRandomSymbol(string $symbol, int $num1, int $num2)
    {
        $result = "";
        switch ($symbol) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
        }
        return $result;
    }
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
