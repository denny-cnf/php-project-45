<?php

/**
 * This file contains logic Brain-games Calc
 */

namespace Games\Calc;

use function cli\line;
use function cli\prompt;
use function Games\Engine\absRandom;
use function Games\Engine\win;
use function Games\Engine\correct;
use function Games\Engine\loss;

function calc()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("What is the result of the expression?");
    for ($i = 0; $i < 3; $i++) {
        $num1 = absRandom();
        $num2 = absRandom();
        if ($num1 < $num2) {
            $tempNum1 = $num1;
            $tempNum2 = $num2;
            $num1 = $tempNum2;
            $num2 = $tempNum1;
        }
        $symbol = array('+', '-', '*');
        $question = $symbol[array_rand($symbol)];
        switch ($question) {
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
        line("Question: $num1 $question $num2");
        $answer = "";
        $answer = prompt('Your answer', $answer);
        if ($result == $answer) {
            correct();
        } else {
            loss($name, $answer, $result);
            exit();
        }
    }
    win($name);
}
