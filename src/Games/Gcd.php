<?php

/**
 * This file contains logic Brain-games Gcd
 */

namespace Games\Gcd;

use function Games\Engine\Hello;
use function Games\Engine\Random;
use function Games\Engine\Correct;
use function Games\Engine\Win;
use function Games\Engine\Loss;
use function Games\Engine\Gmp;
use function cli\line;
use function cli\prompt;

function Gcd()
{
    Hello();
    global $name;
    global $answer;
    global $result;
    
    line("Find the greatest common divisor of given numbers.");
    for ($i = 0; $i < 3; $i++) {
        $num1 = random();
        $num2 = random();
        line("Question: $num1 $num2");
        $answer = "";
        $answer = prompt('Your answer', $answer);
        $result = Gmp($num1, $num2);
        if ($result == $answer) {
            Correct();
        } else {
            Loss();
        }
    }
    Win();
}
