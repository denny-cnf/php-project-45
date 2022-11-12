<?php

/**
 * This file contains logic Brain-games Gcd
 */

namespace Games\Gcd;

use function cli\line;
use function cli\prompt;
use function Games\Engine\absoluteRandomNum;
use function Games\Engine\win;
use function Games\Engine\checkData;
use function Games\Engine\gmp;
use function Games\Engine\hello;

use const Games\Engine\ROUNDS;

function getGcd()
{
    $name = hello();
    line("Find the greatest common divisor of given numbers.");
    for ($i = 0; $i < ROUNDS; $i++) {
        $num1 = absoluteRandomNum();
        $num2 = absoluteRandomNum();
        line("Question: $num1 $num2");
        $getUserAnswer = prompt('Your answer', $getUserAnswer = "");
        $getResult = gmp($num1, $num2);
        checkData($name, $getUserAnswer, $getResult);
    }
    win($name);
}
