<?php

/**
 * This file contains logic Brain-games Gcd
 */

namespace Games\Gcd;

use function cli\line;
use function cli\prompt;
use function Games\Engine\absRandom;
use function Games\Engine\win;
use function Games\Engine\checkData;
use function Games\Engine\gmp;

use const Games\Engine\ROUNDS;

function getGcd()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Find the greatest common divisor of given numbers.");
    for ($i = 0; $i < ROUNDS; $i++) {
        $num1 = absRandom();
        $num2 = absRandom();
        line("Question: $num1 $num2");
        $answer = prompt('Your answer', $answer = "");
        $result = gmp($num1, $num2);
        checkData($name, $answer, $result);
    }
    win($name);
}
